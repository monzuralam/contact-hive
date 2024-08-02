<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Slim\Psr7\UploadedFile;

/**
 * Base
 */
class BaseController {
    /**
     * Response json
     *
     * @param Response $response
     * @param [type] $data
     * @param integer $status
     * @return void
     */
    protected function respondWithJson(Response $response, $data, $status = 200) {
        $response->getBody()->write(json_encode($data));
        return $response->withHeader('Content-Type', 'application/json')->withStatus($status);
    }

    /**
     * Move Upload file
     *
     * @param [type] $directory
     * @param UploadedFile $uploadedFile
     * @return void
     */
    protected function moveUploadedFile($directory, UploadedFile $uploadedFile) {
        $extension = pathinfo($uploadedFile->getClientFilename(), PATHINFO_EXTENSION);
        $basename = bin2hex(random_bytes(8));
        $filename = sprintf('%s.%0.8s', $basename, $extension);

        $uploadedFile->moveTo($directory . DIRECTORY_SEPARATOR . $filename);

        return $filename;
    }
}
