<?php 
namespace App\Controllers;
use Config\Database;

class Login extends Application
{

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->db = \Config\Database::connect();
        $this->user_table = $this->db->table('users');
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
            $username = $_POST['username'];
            $password = $_POST['password'];
            $result = $this->user_table->select('*')->where('username', $username)->get()->getRow();
            if(password_verify($password, $result->password))
            {
                $userDetails = $this->user_table->select('username, mail, credits, pixels, points, look, gender, online, motto')->where('username', $username)->get()->getRow();
                $this->session->set('loggedin', 1);
                $this->session->set('user', $userDetails);
                print_r($this->session->get('userdetails'));
                return redirect()->to('/me');
            } else {
                $this->session->setFlashdata('validation', $this->validator);
                return redirect()->to('/');
            }
        }
    }
  
    public function view() 
    {
        if($this->session->get('loggedin') == 1)
        {
            return redirect()->to('/me');
        } else {
            return $this->render('home/login');
        }
    }
}