<?php 
namespace App\Controllers\Auth;

use Config\Database;

use App\Models\UserModel;

class Login extends \App\Controllers\Application
{
    public function __construct()
    {
        parent::__construct();
        $this->userModel = new UserModel();
    }
  
    public function request()
    {
        if (!$this->validate([
            'username'  => 'required|min_length[3]|max_length[14]',
            'password'  => 'required|min_length[3]|max_length[14]'
        ])) {
            $this->session->setFlashdata('validation', $this->validator);
            return redirect()->to('/auth/login');
        } else {
          
            $username = $this->request->getVar('username', FILTER_SANITIZE_STRING);
            $password = $this->request->getVar('password', FILTER_SANITIZE_STRING);
          
            $user = $this->userModel->getUserByUsername($username);
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