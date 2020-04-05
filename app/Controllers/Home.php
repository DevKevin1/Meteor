<?php 
namespace App\Controllers;
use Config\Database;

class Home extends Application
{
    public function view() 
    {
        if($this->session->get('user'))
        {
            return $this->render('home/me');
        } else {
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        $this->session->removeTempdata('user');
        $this->session->stop();
        return redirect()->to('/');
    }

}