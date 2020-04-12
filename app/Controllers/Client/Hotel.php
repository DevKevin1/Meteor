<?php
namespace App\Controllers\Client;

use App\Models\UserModel;

class Hotel extends \App\Controllers\Application
{

    public function __construct()
    {
        parent::__construct();
        $this->userModel = new UserModel();
    }

    public function view()
    { 
        $token = sha1(substr(md5(rand(-10000, 10000)), 0, 6).substr(md5(rand(-20, 10000)), 0, 10).$player_id).'-'.md5($player_id);
      
        $this->userModel->update($this->user->id, ['auth_ticket' => $token]);
        return $this->render('client/hotel');
    }
}
