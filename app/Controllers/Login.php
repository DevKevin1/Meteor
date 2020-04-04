<?php 
namespace App\Controllers;

use Config\Database;
use App\Models\UserModel;

class Login extends Application
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
            return redirect()->to('/');
        } else {
          
            $username = $this->request->getVar('username', FILTER_SANITIZE_STRING);
            $password = $this->request->getVar('password', FILTER_SANITIZE_STRING);
          
            $user = $this->userModel->getUserByUsername($username);
            if($user && password_verify($password, $user->password))
            {
                $this->session->set('user', $user);
                return redirect()->to('/me');
            } else {
                $this->session->setFlashdata('validation', $this->validator);
                $this->session->setFlashdata('error', 'User credentials wrong');
                return redirect()->to('/');
            }
        }
    }
  
    public function view()
    {
        if($this->session->get('user')) {
            return redirect()->to('/me');
        }
      
        return $this->render('home/login');
    }
}