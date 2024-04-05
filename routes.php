<?php

use App\Controllers\AuthController;
use App\Router;
use \App\Controllers\PublicController;

Router::get('/', [PublicController::class, 'index']);

Router::get('/page1', [PublicController::class, 'page1']);

Router::get('/page2', [PublicController::class, 'page2']);
Router::get('/login', [AuthController::class, 'login']);
Router::get('/register', [AuthController::class, 'register']);
Router::post('/register', [AuthController::class, 'store']);