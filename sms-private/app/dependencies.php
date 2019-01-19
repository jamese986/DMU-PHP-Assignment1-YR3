<?php

// Register component on container
$container['view'] = function ($container) {
  $view = new \Slim\Views\Twig(
    $container['settings']['view']['template_path'],
    $container['settings']['view']['twig'],
    [
      'debug' => true // This line should enable debug mode
    ]
  );

  // Instantiate and add Slim specific extension
  $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
  $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

  // This line should allow the use of {{ dump() }} debugging in Twig
  $view->addExtension(new \Twig_Extension_Debug());

  return $view;
};

// encryption
$container['base64_wrapper'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'Base64Wrapper.php';
    $wrapper = new Base64Wrapper();
    return $wrapper;
};

$container['bcrypt_wrapper'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'BcryptWrapper.php';
    $wrapper = new BcryptWrapper();
    return $wrapper;
};
// encryption end

$container['validator'] = function ($container) {
  $class_path = $container->get('settings')['class_path'];
  require $class_path . 'Validator.php';
  $validator = new Validator();
  return $validator;
};

$container['peek_messages'] = function ($container){
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'soappeekmessages.php';
    $peek_messages = new soappeekmessages();
    return $peek_messages;

};

/*
$container['send_message'] = function ($container){
    $send_message = new \CTEC3110\API\sendMessage();
    $send_message->setCredentials($container['settings']['m2m_login']);
    $send_message->setConstants($container['settings']['m2m_constants']);
    return $send_message;
};
*/
$container['xml_parser'] = function ($container) {
  $class_path = $container->get('settings')['class_path'];
  require $class_path . 'XmlParser.php';
  $model = new XmlParser();
  return $model;
};



