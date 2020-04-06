<?php 
namespace App\Controllers\Home;

use App\Models\ConfigModel;
use App\Models\UserModel;
use App\Models\UserCurrencyModel;
use App\Models\UserSettingsModel;

class Registration extends \App\Controllers\Application
{
    public function __construct()
    {
        parent::__construct();
        $this->userModel = new UserModel();
        $this->configModel = new ConfigModel();
        $this->userCurrencyModel = new UserCurrencyModel();
        $this->userSettingsModel = new UserSettingsModel();
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
          
            $password = password_hash($password, PASSWORD_BCRYPT);
            
            $user_id = $this->userModel->insert([
                'username'        => $username,
                'password'        => $password,
                'mail'            => $email,
                'account_created' => time(),
                'look'            => $avatar,
                'credits'         => $credits,
                'gender'          => $gender,
                'last_login'      => time(),
                'ip_register'     => $ipaddres,
                'ip_current'      => $ipaddres
            ]);
          
            if($user_id)
            {
                $this->userSettingsModel->insert(['user_id' => $user_id]);
              
                /*
                *   Create user currencys
                */
              
                $currencys = $this->configModel->getCurrencys();
              
                if($currencys) {
                    foreach($currencys as $currency) {
                        $type = substr($currency->key, strrpos($currency->key, '.') + 1);
                        $this->userCurrencyModel->insert(['user_id' => $user_id, 'type' => $type, 'amount' => $currency->value]);
                    }
                }
              
                $this->session->set('user', $this->userModel->find($user_id));
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