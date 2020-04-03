<?php 
namespace App\Controllers;

class Login extends AuthController
{
    public function request() {
      
        if (! $this->validate([
            'username' => 'required|min_length[3]|max_length[14]',
            'password'  => 'required|min_length[3]|max_length[14]'
        ])) {
            $this->session->setFlashdata('validation', $this->validator);
            return redirect()->to('/');
        } else {
            //goed
        }
    }
  
    public function view() {
        return \Twig::instance()->display('Pages/Home/login.html', ['form_data' => $login_form]);
    }
}