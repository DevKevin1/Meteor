<?php 
namespace App\Controllers;
use App\Models\CommunityModel;
use App\Models\PermissionModel;
use App\Models\UserModel;
use Config\Database;

class Community extends Application
{

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->db = \Config\Database::connect();
        $this->userModel = new UserModel();
        $this->communityModel = new CommunityModel();
        $this->permissionModel = new PermissionModel();
    }

    public function view() 
    {
        $getMostPoints = $this->communityModel->orderPoints();
        return $this->render('community/overview', array('getPointsUsers' => $getMostPoints));
    }

    public function staff()
    {
        $ranks = $this->communityModel->ranks();

        foreach($ranks as $row)
        {
            if(!$this->permissionModel->exists('website_invisible_staff', $row->id))
            {
                $row->users = $this->userModel->getDataByRank($row->id);
            }
        }
        return $this->render('community/staff', array('data' => $ranks));
    }
}