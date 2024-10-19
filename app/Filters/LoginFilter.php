<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class LoginFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        if (! service('auth')->isLoggedIn()) {

            session()->set('redirect_url', current_url());

            return redirect()->to('login')
                             ->with('info', 'please login first');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null){

    }
}