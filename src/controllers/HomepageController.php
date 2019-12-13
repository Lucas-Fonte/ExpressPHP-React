<?php declare(strict_types = 1);

namespace ExpressPHP\Controllers;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomepageController
{
    private $request;
    private $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function index()
    {
        $content = $this->request->getContent();
        $this->response->setContent($content);
    }
}