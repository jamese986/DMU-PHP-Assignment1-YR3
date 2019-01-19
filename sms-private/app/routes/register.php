<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/register', function(Request $request, Response $response)
{


  return $this->view->render($response,
    'registration.html.twig',
    [
      'css_path' => CSS_PATH,
      'js_path' => JS_PATH,
      'landing_page' => LANDING_PAGE,
      'action' => 'register-submit',
      'method' => 'post',
      'page_title' => APP_NAME,
      'homepage' => LANDING_PAGE . '/',
      'register' => LANDING_PAGE . '/register',
      'login' => LANDING_PAGE . '/login',
      'contact' => LANDING_PAGE . '/#contact',
          ]);
})->setName('register');

