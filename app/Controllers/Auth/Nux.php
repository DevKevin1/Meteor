<?php 
namespace App\Controllers\Auth;

use App\Models\NuxModel;
use CodeIgniter\API\ResponseTrait;

class Nux extends \App\Controllers\Application
{
    use ResponseTrait;

    public function __construct()
    {
        parent::__construct();
        $this->userModel = model('UserModel');
    }
  
    public function checkName()
    {
        if($this->userModel->where('username', $this->request->getJSON('name'))->first()) {
            return $this->respond(new NuxModel('NAME_IN_USE'));
        }
      
        return $this->respond(new NuxModel());
    }
}