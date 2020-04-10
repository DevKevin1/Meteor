<?php 
namespace App\Controllers\Community;

use App\Models\UserModel;

class Highscores extends \App\Controllers\Application
{

    public function __construct()
    {
        parent::__construct();
        $this->communityModel = new UserModel();
    }

    public function view() 
    {
        $getMostCredits = $this->communityModel->select('username, credits, look')->findAll();
        return $this->render('community/overview', ['getCreditsUsers' => $getMostCredits]);
    }
}