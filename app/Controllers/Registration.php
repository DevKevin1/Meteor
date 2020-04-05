<?php 
namespace App\Controllers;
use App\Models\UserModel;
use Config\Database;

class Registration extends Application
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->db = Database::connect();
        $this->userModel = new UserModel();
    }

    public function view() 
    {
        return $this->render('home/registration');
    }

    public function store()
    {
        $username = $this->request->getVar('username', FILTER_SANITIZE_STRING);
        $password = password_hash($this->request->getVar('password', FILTER_SANITIZE_STRING), PASSWORD_BCRYPT);
        $look = 'hd-180-1.hr-828-61.ch-255-79.lg-280-110.sh-290-62';
        $insertStatus = $this->userModel->insert(['username'=> $username, 'password'=> $password, 'look' => $look]);
        if($insertStatus)
        {
            $this->session->set('loggedin', 1);
            return redirect()->to('/me');
        } else {

        }
        $this->session->setFlashdata('validation', $this->validator);
        $this->session->setFlashdata('error', 'User credentials wrong');
        return $this->render('home/registration');
    }
}