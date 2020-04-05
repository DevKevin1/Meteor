<?php
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class isLoggedIn implements FilterInterface
{
    public function before(RequestInterface $request)
    {
        $session = Services::session();
        if($session->has('user')) { 
            return redirect()->to('/me');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response)
    {
    }

} 