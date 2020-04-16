<?php 
namespace App\Controllers\Home;

class Home extends \App\Controllers\Application
{  
    public function __construct()
    {
        parent::__construct();
        $this->userCurrency = model('UserCurrencyModel');
        $this->articlesModel = model('ArticlesModel');
        $this->userModel = model('UserModel');
    }
  
    public function me()
    {
        $currencys = $this->userCurrency->get($this->user->id);
        $getArticles = $this->articlesModel->findAll(getenv('meteor.home.news.limit'));
      
        return $this->render('home/me', ['articles' => $getArticles, 'currencys' => $currencys]);
    }
}