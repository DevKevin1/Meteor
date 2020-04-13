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
        $this->userModel = new UserModel();
    }

    public function item($id)
    {
        $article = $this->articlesModel->find($id);
      
        if(is_null($article)) {
            return redirect()->to('/');
        }
      
        $article->author = $this->userModel->getUserById($article->id, 'username,look');
        $getArticles = $this->articlesModel->findAll(getenv('meteor.news.limit'));
      
        return $this->render('community/article', ['allArticles' => $getArticles, 'item' => $article]);
    }
  
    public function view()
    {
        $this->item($this->articlesModel->first()->id);
    }
}
