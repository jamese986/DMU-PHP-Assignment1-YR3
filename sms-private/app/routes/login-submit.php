<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post('/login-submit', function(Request $request, Response $response)
{
    $arr_tainted_params = $request->getParsedBody();

    $email = $arr_tainted_params['email'];
    $password  = md5($arr_tainted_params['password']);

    $query = "Select username from register where email='$email' and password='$password'";
   // echo $query;
    $connection = mysqli_connect("mysql.tech.dmu.ac.uk","p15224093","criCk=79","p15224093db") or die(mysqli_error());
    $result = mysqli_query($connection,$query) or die(mysqli_error());

    $results = mysqli_fetch_array($result);
    if($results>=1){
        echo "<script>alert('Login Success')</script>";
    }
    else{
        echo "<script>alert('Login Failed')</script>";
        header ('location: register');
        die();
    }

    $processSoap = header('Location: php.tech.dmu.ac.uk:6789/p15224093/php-final-v1/index.php/login');
    return $this->view->render($response,
        'login-submit.html.twig',
        [
            'css_path' => CSS_PATH,
            'js_path' => JS_PATH . 'map.js',
            'landing_page' => LANDING_PAGE,
            'process_soap' => LANDING_PAGE . '/process-soap',
            'page_title' => APP_NAME,
            'action' => 'login-submit',
            'method' => 'post',
            'homepage' => LANDING_PAGE . '/',
            'register' => LANDING_PAGE . '/register',
            'login' => LANDING_PAGE . '/login',
            '#contact' => LANDING_PAGE . 'base_url/#contact'
        ]);
})->setName('login success');