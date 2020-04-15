<?php 
namespace App\Controllers\Auth;

class Login extends \App\Controllers\Application
{
    public function __construct()
    {
        parent::__construct();
    }
  
    public function request()
    {
         $this->userModel = model('UserModel');
      
        if (!$this->validate([
            'mail'  => 'required|min_length[6]',
            'password'  => 'required|min_length[3]|max_length[14]'
        ])) {
            $this->session->setFlashdata('validation', $this->validator);
            return redirect()->to('/auth/login');
        } else {
          
            $mail = $this->request->getVar('mail', FILTER_SANITIZE_STRING);
            $password = $this->request->getVar('password', FILTER_SANITIZE_STRING);
          
            $user = $this->userModel->where('mail', $mail)->first();
            if($user && password_verify($password, $user->password))
            {
                $this->session->set('user', $user);
                return redirect()->to('/');
            } else {
                $this->session->setFlashdata('validation', $this->validator);
                $this->session->setFlashdata('error', 'User credentials wrong');
                return redirect()->to('/auth/login');
            }
        }
    }
  
    public function logout()
    {
        $this->session->removeTempdata('user');
        $this->session->stop();
      
        return redirect()->to('/');
    }
  
    public function view()
    {
        return $this->render('auth/login');
    }
}