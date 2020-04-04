<?php 
namespace App\Controllers;
use Config\Database;

class Home extends Application
{
    public function view() 
    {
        if($this->session->get('loggedin') == 1)
        {
            return $this->render('home/me');
        } else {
            return redirect('/');
        }
    }

    public function logout()
    {
        $this->session->set('loggedin', 0);
        $this->session->stop();
        return redirect()->to('/');
    }

}