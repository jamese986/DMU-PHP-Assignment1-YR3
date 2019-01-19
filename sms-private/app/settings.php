<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 'On');
ini_set('xdebug.trace_output_name', 'sms_application.%t');

define('DIRSEP', DIRECTORY_SEPARATOR);

$url_root = $_SERVER['SCRIPT_NAME'];
$url_root = implode('/', explode('/', $url_root, -1));
$css_path = $url_root . '/sms-public/assets/css/style.css';
$js_path = $url_root . '/sms-public/assets/js/map.js';
define('CSS_PATH', $css_path);
define('JS_PATH', $js_path);
define('APP_NAME', 'SMS Application');
define('LANDING_PAGE', $_SERVER['SCRIPT_NAME']);

define ('BCRYPT_ALGO', PASSWORD_DEFAULT);
define ('BCRYPT_COST', 12);



$settings = [
  "settings" => [
    'displayErrorDetails' => true,
    'addContentLengthHeader' => false,
    'mode' => 'development',
    'debug' => true,
    'class_path' =>  __DIR__ . '/src/',
    'view' => [
      'template_path' => __DIR__ . '/templates/',
      'twig' => [
        'cache' => __DIR__ . '/cache/twig',
        'auto_reload' => true,
      ],


    "m2m_login" =>  [
    'username' => '17andrew',
    'password' => 'Mika2503'
    ],


    "m2m_constants" =>[
    'wsdl' => 'https://m2mconnect.ee.co.uk/orange-soap/services/MessageServiceByCountry?wsdl',
    'count' => '1000',
    'deviceMsisdn' => '+447817814149',
    'countryCode' => '+44',
    'deliverReport' => false,
    'mtBearer' => 'SMS',
    'identifier' => "17-3110-AA"
    ]
        ]

]];

return $settings;