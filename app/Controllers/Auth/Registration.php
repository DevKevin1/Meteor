<?php 
namespace App\Controllers\Auth;

class Registration extends \App\Controllers\Application
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store()
    {
        $this->userModel = model('UserModel');
        $this->configModel = model('ConfigModel');
        $this->userCurrencyModel = model('UserCurrencyModel');
        $this->userSettingsModel = model('UserSettingsModel');
      
        if (!$this->validate([
            'password'          => 'required|min_length[6]|max_length[20]',
            'repeatpassword'    => 'required|matches[password]',
            'email'             => 'required|is_unique[users.mail]|valid_email',
            'gender'            => 'required|pattern[^(?:MORF)$]'
        ])) {
          
            $this->session->setFlashdata('validation', $this->validator);
          
            /*
            *   Store and return the users entered values   
            */
          
            return redirect()->to('/register')->withInput();
        } else {
          
            /*
            *   Sanitize variables and store in userModel  
            */
          
            $password = $this->request->getVar('password', FILTER_SANITIZE_STRING);
            $avatar   = $this->request->getVar('habbo-avatar', FILTER_SANITIZE_STRING);
            $email    = $this->request->getVar('email', FILTER_SANITIZE_STRING);
            $gender   = $this->request->getVar('gender', FILTER_SANITIZE_STRING);
            $motto  =   $this->configModel->find('default.motto')->value;
            $credits  = $this->configModel->find('default.credits')->value;
            $ipaddres = $this->request->getIPAddress();
          
            $password = $password = password_hash($password, PASSWORD_BCRYPT);
           
            /*
            *   Generate random username from mail
            */
          
            $username = substr($email, 0, strrpos($email, '@'));
            $username = preg_replace('/[^A-Za-z0-9. -]/', '', $username);
            $username = substr($username .= uniqid(), 0, 11);
          
            if($this->userModel->where('username', $username)->first()) {
                $username = substr(uniqid(), 0, 11);
            }   
          
            /*
            *   Store in Database 
            */
          
            $user_id = $this->userModel->insert([
                'username'        => $username,
                'mail'            => $email,
                'password'        => $password,
                'account_created' => time(),
                'motto'           => $motto,
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
          
        $this->view();
    }

    public function view() 
    {
        return $this->render('auth/registration');
    }
}