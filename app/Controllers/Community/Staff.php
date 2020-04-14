<?php 
namespace App\Controllers\Community;

class Staff extends \App\Controllers\Application
{

    public function __construct()
    {
        parent::__construct();
        $this->userModel = model('UserModel');
        $this->permissionModel = model('PermissionModel');
    }

    public function view()
    {
        $ranks = $this->permissionModel->ranks();
      
        foreach($ranks as $row) {
            if(!$this->permissionModel->exists('website_invisible_staff', $row->id))
            {
                $row->users = $this->userModel->getDataByRank($row->id);
            }
        }
      
        return $this->render('community/staff', ['data' => $ranks]);
    }
}