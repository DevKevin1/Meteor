<?php 
namespace App\Controllers;
use Config\Database;

class Registration extends Application
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->db = Database::connect();
        $this->config_table = $this->db->table('users');
    }

    public function view() 
    {
        return $this->render('home/registration');
    }

    public function store()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $look = 'hd-180-1.hr-828-61.ch-255-79.lg-280-110.sh-290-62';
        $this->user_table->insert(['username'=>$username, 'password'=>$password, 'look' => $look]);
        $this->session->set('loggedin', 1);
        return $this->render('home/registration');
    }
}