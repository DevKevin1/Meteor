<?php 
namespace App\Controllers\Home;

use App\Models\ConfigModel;
use App\Models\UserModel;

class Registration extends \App\Controllers\Application
{
    public function __construct()
    {
        parent::__construct();
        $this->userModel = new UserModel();
        $this->configModel = new ConfigModel();
    }

    public function store()
    {
        if (!$this->validate([
            'username'          => 'required|min_length[2]|max_length[14]|pattern[[a-zA-Z0-9-=?!@:.]+]|is_unique[users.username]',
            'password'          => 'required|min_length[6]|max_length[20]',
            'repeatpassword'    => 'required|matches[password]',
            'email'             => 'required|is_unique[users.mail]|valid_email',
            'gender'            => 'required|pattern[^(?:MORF)$]'
        ])) {
          
            $this->session->setFlashdata('validation', $this->validator);
          
            /*
            *   Store and return the users entered values   
            */
          
            $this->session->setFlashdata('username', $this->request->getVar('username'));
            $this->session->setFlashdata('email', $this->request->getVar('email'));
            $this->session->setFlashdata('date', $this->request->getVar('date'));
          
            return redirect()->to('/register');
        } else {
          
            /*
            *   Sanitize variables and store in userModel  
            */
          
            $username = $this->request->getVar('username', FILTER_SANITIZE_STRING);
            $password = $this->request->getVar('password', FILTER_SANITIZE_STRING);
            $avatar   = $this->request->getVar('habbo-avatar', FILTER_SANITIZE_STRING);
            $email    = $this->request->getVar('email', FILTER_SANITIZE_STRING);
            $gender   = $this->request->getVar('gender', FILTER_SANITIZE_STRING);
            $credits  = $this->configModel->find('start_credits')->value;
            $ipaddres = $this->request->getIPAddress();
          
            $password_hash = password_hash($password, PASSWORD_BCRYPT);

            $data = [
                'username'        => $username,
                'password'        => $password_hash,
                'mail'            => $email,
                'account_created' => time(),
                'look'            => $avatar,
                'credits'         => $credits,
                'gender'          => $gender,
                'last_login'      => time(),
                'ip_register'     => $ipaddres,
                'ip_current'      => $ipaddres
            ];
            
            $insertStatus = $this->userModel->insert($data);
            if($insertStatus)
            {
                $this->session->set('user', $this->userModel->find($insertStatus));
                return redirect()->to('/me');
            } else {
                $this->session->setFlashdata('validation', $this->validator);
                $this->session->setFlashdata('error', 'User credentials wrong');
            }
        }
        return $this->render('home/registration');
    }

    public function view() 
    {
        return $this->render('home/registration');
    }
}