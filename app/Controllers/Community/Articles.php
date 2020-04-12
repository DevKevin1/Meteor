<?php
namespace App\Controllers\Community;

use App\Models\ArticlesModel;
use App\Models\UserModel;

class Articles extends \App\Controllers\Application
{

    public function __construct()
    {
        parent::__construct();
        $this->articlesModel = new ArticlesModel();
    }

    public function view()
    {
        $getArticles = $this->articlesModel->findAll(getenv('cosmic.news.limit'));
        return $this->render('community/article', ['allArticles' => $getArticles]);
    }
}
