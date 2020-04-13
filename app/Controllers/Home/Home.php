<?php 
namespace App\Controllers\Home;

use App\Models\ArticlesModel;

class Home extends \App\Controllers\Application
{  
    public function __construct()
    {
        parent::__construct();
        $this->articlesModel = new ArticlesModel();
    }
  
    public function me()
    {
        $getArticles = $this->articlesModel->findAll(getenv('meteor.home.news.limit'));
        return $this->render('home/me', ['articles' => $getArticles]);
    }
}