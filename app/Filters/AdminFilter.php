<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;    
use CodeIgniter\HTTP\RequestInterface;  
use CodeIgniter\HTTP\ResponseInterface;

class AdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        $user = service('auth')->getCurrentUser(); 

        if( ! $user->is_admin){
            #$response = service('response');
            $response = service('responde')->setStatusCode(403);
            $response->setBody('NO TIENES PERMISO PARA ACCEDER');
            return $response;
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null){

    }
}