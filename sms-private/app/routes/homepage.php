<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/', function(Request $request, Response $response)
{
    return $this->view->render($response,
        'homepage.html.twig',
        [
            'css_path' => CSS_PATH,
            'js_path' => JS_PATH,
            'page_title' => APP_NAME,
            'action' => 'sendmail.php',
            'method' => 'post',
            'landing_page' => LANDING_PAGE,
            'homepage' => LANDING_PAGE . '/',
            'register' => LANDING_PAGE . '/register',
            'login' => LANDING_PAGE . '/login',
            'contact' => LANDING_PAGE . '/#contact'
        ]);

})->setName('homepage');

