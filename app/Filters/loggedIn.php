<?php
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class loggedIn implements FilterInterface
{
    public function before(RequestInterface $request)
    {
        $session = Services::session();
      
        if ($session->has('user')) { 
           if ($request->uri->getPath() == '/') {
                return redirect()->to('/me');
            }
        } else {
            if ($request->uri->getPath() != 'auth/login') {
                return redirect()->to('/auth/login');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response)
    {
    }

} 