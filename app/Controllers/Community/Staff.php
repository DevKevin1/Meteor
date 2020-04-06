<?php 
namespace App\Controllers\Community;

use App\Models\CommunityModel;
use App\Models\PermissionModel;
use App\Models\UserModel;

class Staff extends \App\Controllers\Application
{

    public function __construct()
    {
        parent::__construct();
        $this->userModel = new UserModel();
        $this->permissionModel = new PermissionModel();
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