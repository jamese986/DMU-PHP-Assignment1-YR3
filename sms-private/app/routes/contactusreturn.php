<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 04/01/2018
 * Time: 14:45
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/contactusreturn', function(Request $request, Response $response)
{


    echo JS_PATH;

    return $this->view->render($response,
        'contactus.return.html.twig',
        [
            'css_path' => CSS_PATH,
            'js_path' => JS_PATH,
            'page_title' => APP_NAME,
            'landing_page' => LANDING_PAGE,
            'homepage' => LANDING_PAGE . '/',
            'register' => LANDING_PAGE . '/register',
            'login' => LANDING_PAGE . '/login',
            'contact' => LANDING_PAGE . '/#contact',

        ]);
})->setName('contact us return');