<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/login', function(Request $request, Response $response)
{

    return $this->view->render($response,
        'login.html.twig',
        [
            'css_path' => CSS_PATH,
            'js_path' => JS_PATH . 'map.js',
            'landing_page' => LANDING_PAGE,
            'page_title' => APP_NAME,
            'action' => 'login-submit',
            'method' => 'post',
            'homepage' => LANDING_PAGE . '/',
            'register' => LANDING_PAGE . '/register',
            'login' => LANDING_PAGE . '/login',
            '#contact' => LANDING_PAGE . 'base_url/#contact'
        ]);
})->setName('login');

