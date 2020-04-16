<?php
namespace App\Controllers;

use App\Libraries\Twig\Twig;

use App\Models\ConfigModel;
use App\Models\UserModel;

use CodeIgniter\Controller;
use CodeIgniter\Files\Exceptions\FileNotFoundException;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;

use Config\App;
use Config\Services;
use Psr\Log\LoggerInterface;

class Application extends Controller
{
    protected $session;
    protected $response;
    protected $user;
    protected $data = [];

    public function __construct()
    {
        $this->twig = new Twig();
        $this->session = \Config\Services::session();
      
        if ($this->session->has('user')) { 
            $this->accounts = (new UserModel())->where('mail', $this->session->get('user')->mail)->findAll(); 
            $this->user = (new UserModel())->find($this->session->get('user')->id);
        }
    }
  
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
    }
 
    public function render(string $page, $args = [])
    {
        $args['accounts'] = ($this->accounts) ? $this->accounts : null;
        $args['user'] = ($this->user) ? $this->user : null;

        $this->response->setBody($this->twig->Rendered($page, $args));
        $this->response->send();

        return $this;
    }
}