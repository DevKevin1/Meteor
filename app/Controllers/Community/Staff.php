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
        $ranks = $this->permissionModel->select('id, rank_name')->where('id > ', 2)->findAll();

        foreach($ranks as $row) 
        {
            if($this->role->hasRoleForUser($this->user->rank, 'website_invisible_staff')) {
                $row->users = $this->userModel->getDataByRank($row->id);
            }
        }
      
        return $this->render('community/staff', ['data' => $ranks]);
    }
}