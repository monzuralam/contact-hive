<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Contact;

/**
 * Contact
 */
class ContactController extends BaseController {
    /**
     * Index
     *
     * @param Request $request
     * @param Response $response
     * @param [type] $args
     * @return void
     */
    public function index(Request $request, Response $response, $args) {
        $contacts = Contact::all();
        $response->getBody()->write($contacts->toJson());
        return $response->withHeader('Content-Type', 'application/json');
    }

    /**
     * Create
     *
     * @param Request $request
     * @param Response $response
     * @param [type] $args
     * @return void
     */
    public function create(Request $request, Response $response, $args) {
        $data = $request->getParsedBody();
        $contact = Contact::create($data);
        return $this->respondWithJson($response, $contact, 201);
    }

    /**
     * Show
     *
     * @param Request $request
     * @param Response $response
     * @param [type] $args
     * @return void
     */
    public function show(Request $request, Response $response, $args) {
        $contact = Contact::findOrFail($args['id']);
        return $this->respondWithJson($response, $contact);
    }

    /**
     * Update Contact
     *
     * @param Request $request
     * @param Response $response
     * @param [type] $args
     * @return void
     */
    public function update(Request $request, Response $response, $args) {
        // $data = $request->getParsedBody();
        $rawData = $request->getBody()->getContents();
        $data = json_decode($rawData, true);

        $contact = Contact::findOrFail($args['id']);
        $contact->update($data);
        return $this->respondWithJson($response, $contact);
    }

    /**
     * Delete Contact
     *
     * @param Request $request
     * @param Response $response
     * @param [type] $args
     * @return void
     */
    public function delete(Request $request, Response $response, $args) {
        $contact = Contact::findOrFail($args['id']);
        $contact->delete();
        return $this->respondWithJson($response, ['message' => 'Contact deleted']);
    }

    /**
     * Upload Image
     *
     * @param Request $request
     * @param Response $response
     * @param [type] $args
     * @return void
     */
    public function upload(Request $request, Response $response, $args) {
        $directory = __DIR__ . '/../../public/uploads';
        $uploadedFiles = $request->getUploadedFiles();
        $uploadedFile = $uploadedFiles['photo'];

        // Check if the directory exists, create it if it doesn't, and set permissions
        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }

        // Ensure the directory is writable
        if (!is_writable($directory)) {
            chmod($directory, 0777);
        }

        if ($uploadedFile->getError() === UPLOAD_ERR_OK) {
            $filename = $this->moveUploadedFile($directory, $uploadedFile);
            $contact = Contact::findOrFail($args['id']);
            $contact->photo = $filename;
            $contact->save();
            return $this->respondWithJson($response, $contact);
        }

        return $this->respondWithJson($response, ['error' => 'Failed to upload photo'], 400);
    }
}
