<?php 
namespace App\Controllers;

class Login extends Application
{
    public function request() 
    {
        if (!$this->validate([
            'username'  => 'required|min_length[3]|max_length[14]',
            'password'  => 'required|min_length[3]|max_length[14]'
        ])) {
            $this->session->setFlashdata('validation', $this->validator);
        } else {
            //goed
        }
      
        return redirect()->to('/');
    }
  
    public function view() 
    {
        $this->session->setFlashdata('success', 'test');

        return $this->render('home/login');
    }
}