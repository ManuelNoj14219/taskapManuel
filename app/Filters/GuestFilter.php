<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class GuestFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        if (service('auth')->isLoggedIn()) {

            return redirect()->to('');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null){

    }
}