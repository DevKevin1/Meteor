<?php
namespace App\Controllers\Client;

use App\Models\UserModel;

class Hotel extends \App\Controllers\Application
{

    public function __construct()
    {
        parent::__construct();
    }

    public function view()
    { 
        $this->userModel = model('UserModel')->find($this->user->id);
        $this->userSettingsModel = model('UserSettingsModel')->find($this->user->id);
          
        if($this->userModel->online == 1) {
            return redirect()->back()->with('error', 'Je bent al ingelogd!');
        }
      
        $auth_token   = sha1(substr(md5(rand(-10000, 10000)), 0, 6).substr(md5(rand(-20, 10000)), 0, 10). $this->user->id).'-'.md5($this->user->id);
        $unique_id    = getenv('meteor.hotelname') . '-' . substr(md5(uniqid()), 0, -20);

        $this->userModel->update($this->user->id, ['auth_ticket' => $auth_token]);
      
        $data = [
            'nux_active' => $this->userSettingsModel->nux,
            'auth_token' => $auth_token,
            'unique_id'  => $unique_id
        ];
      
        return $this->render('client/hotel', $data);
    }
}
