<?php 
namespace App\Controllers\Community;

class Highscores extends \App\Controllers\Application
{

    public function __construct()
    {
        parent::__construct();
        $this->communityModel = model('UserModel');
    }

    public function view() 
    {
        $getMostCredits = $this->communityModel->select('username, credits, look')->findAll();
        return $this->render('community/overview', ['getCreditsUsers' => $getMostCredits]);
    }
}