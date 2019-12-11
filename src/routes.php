<?php declare(strict_types = 1);

use Symfony\Component\Routing\Route;
use App\Controller\TestController;

$route = new Route('/test', ['_controller' => 'TestController', 'method'=>'load']);