<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Error
 */
class ErrorController extends BaseController {
    /**
     * 404
     *
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function notFound(Request $request, Response $response): Response {
        $payload = ['error' => 'Resource not found'];
        $response->getBody()->write(json_encode($payload, JSON_UNESCAPED_UNICODE));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(404);
    }

    /**
     * Internal Server Error
     *
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function internalServerError(Request $request, Response $response): Response {
        $payload = ['error' => 'Internal Server Error'];
        $response->getBody()->write(json_encode($payload, JSON_UNESCAPED_UNICODE));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(500);
    }
}
