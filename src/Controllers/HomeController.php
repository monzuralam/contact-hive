<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Home
 */
class HomeController extends BaseController {
    
    /**
     * Index
     *
     * @param Request $request
     * @param Response $response
     * @param [type] $args
     * @return Response
     */
    public function index(Request $request, Response $response, $args): Response {
        $response->getBody()->write('ContactHive - REST API Based PHP Application');
        return $response;
    }
}