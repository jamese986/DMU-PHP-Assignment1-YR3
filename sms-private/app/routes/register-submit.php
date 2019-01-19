<?php


use Slim\Http\Request;
use Slim\Http\Response;

$app->post(
    '/register-submit',
    function(Request $request, Response $response) use ($app)
    {
        $arr_tainted_params = $request->getParsedBody();

        $validator = $this->get('validator');

        $arr_cleaned_params = validation($validator, $arr_tainted_params);

        $bcrypt_wrapper = $this->get('bcrypt_wrapper');
        $base64_wrapper = $this->get('base64_wrapper');

        $arr_hashed = hash_values($bcrypt_wrapper, $arr_cleaned_params);

        $username = $arr_tainted_params['username'];
        $password =  md5($arr_tainted_params['password']);
        $email = $arr_tainted_params['email'];

        $query = "Insert into register(email,password,username) values('".$email."','".$password."','".$username."')";

        $connction = mysqli_connect("mysql.tech.dmu.ac.uk","p15224093","criCk=79","p15224093db") or die(mysqli_error());
        $result = mysqli_query($connction,$query) or die(mysqli_error());

        if($result){
            echo "<script>alert('Register Success')</script>";
            header('Location: http://php.tech.dmu.ac.uk:6789/p15224093/php-final-v1/index.php/login');
            die();
        }
        return $this->view->render($response,
            'register-return.html.twig',
            [
                'landing_page' => $_SERVER["SCRIPT_NAME"],
                'css_path' => CSS_PATH,
                'page_title' => APP_NAME,
                'homepage' => LANDING_PAGE . '/',
                'register' => LANDING_PAGE . '/register',
                'login' => LANDING_PAGE . '/login',
                'contact' => LANDING_PAGE . '/#contact',
                'page_heading_1' => 'New User Registration',
                'username' => $arr_tainted_params['username'],
                'password' => $arr_tainted_params['password'],
                'email' => $arr_tainted_params['email'],


            ]);
    });

// seperate into nw file
function validation($p_validator, $p_arr_tainted_params)
{
    $arr_cleaned_params = [];
    $tainted_username = $p_arr_tainted_params['username'];
    $tainted_email = $p_arr_tainted_params['email'];

    $arr_cleaned_params['password'] = $p_arr_tainted_params['password'];
    $arr_cleaned_params['sanitised_username'] = $p_validator->sanitise_string($tainted_username);
    $arr_cleaned_params['sanitised_email'] = $p_validator->sanitise_email($tainted_email);
    return $arr_cleaned_params;
}

function encode($p_base64_wrapper, $p_arr_encrypted)
{
    $arr_encoded = [];
    $arr_encoded['encoded_username'] = $p_base64_wrapper->encode_base64($p_arr_encrypted['encrypted_username']);
    $arr_encoded['encoded_email'] = $p_base64_wrapper->encode_base64($p_arr_encrypted['encrypted_email']);
       return $arr_encoded;
}

function hash_values($p_bcrypt_wrapper, $p_arr_cleaned_params)
{
    $arr_encoded = [];
    $arr_encoded['hashed_password'] = $p_bcrypt_wrapper->create_hashed_password($p_arr_cleaned_params['password']);
    return $arr_encoded;
}