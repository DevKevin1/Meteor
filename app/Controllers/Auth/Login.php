<?php 
namespace App\Controllers\Auth;

class Login extends \App\Controllers\Application
{
    public function __construct()
    {
        parent::__construct();
        $this->userModel = model('UserModel');
    }
  
    public function request()
    {
        if (!$this->validate([
            'mail'  => 'required|min_length[6]',
            'password'  => 'required|min_length[3]|max_length[14]'
        ])) {
            $this->session->setFlashdata('validation', $this->validator);
            return redirect()->to('/auth/login');
        } else {
          
            $mail = $this->request->getVar('mail', FILTER_SANITIZE_STRING);
            $password = $this->request->getVar('password', FILTER_SANITIZE_STRING);
          
            $user = $this->userModel->where('mail', $mail)->where('active', '1')->first();
            if($user && password_verify($password, $user->password))
            {
                
                $this->userModel->set(['ip_current' => $this->request->getIPAddress()])->where('id', $user->id)->update();
              
                $this->session->set('user', $user);
                return redirect()->to('/');
            } else {
                $this->session->setFlashdata('validation', $this->validator);
                $this->session->setFlashdata('error', 'User credentials wrong');
                return redirect()->to('/auth/login');
            }
        }
    }
  
    public function switch()
    {
        if(!$this->session->has('user_id') && !$this->request->getVar('switch')) {
            return redirect()->to('/');
        }
        
        if($this->request->getVar('switch')) {
            $this->session->setTempdata('user_id', $this->request->getVar('switch'));
        }

        $user = $this->userModel->find($this->session->get('user_id'));
        if($user && $this->user->password === $user->password && $this->user->mail === $user->mail)
        {
            if($this->request->getIPAddress() !== $this->user->ip_current) {
                $this->logout();
            }
          
            $this->userModel->set(['active' => '0'])->where('id', $this->user->id)->update();
            $this->userModel->set(['active' => '1'])->where('id', $user->id)->update();
            
            $this->session->removeTempdata('user');
            $this->session->removeTempdata('user_id');
            $this->session->set('user', $user);
        }
        
        return redirect()->to('/');
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