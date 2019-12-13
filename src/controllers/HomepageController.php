<?php declare(strict_types = 1);

namespace Confetti\Controllers;

use Http\Request;
use Http\Response;

class HomepageController
{
    private $request;
    private $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function show()
    {
        $content = $this->request;
        $this->response->setContent(print_r($content));
    }
}