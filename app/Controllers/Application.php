<?php
namespace App\Controllers;

use App\Libraries\Twig\Twig;

use App\Models\ConfigModel;

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
    protected $data = [];

    public function __construct()
    {
        $this->twig = new Twig();
    }
  
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->session = \Config\Services::session();
    }

    public function render(string $page, $args = [])
    {
        $this->response->setBody($this->twig->Rendered($page, $args));
        $this->response->send();

        return $this;
    }
}