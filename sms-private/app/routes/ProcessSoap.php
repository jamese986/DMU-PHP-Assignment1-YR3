<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 04/01/2018
 * Time: 14:45
 * Responds
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class SoapModelTest{

    public function create_soap_client()
    {
        $obj_soap_client_handle = false;

        $m_arr_soapclient = ['trace' => true, 'exceptions' => true];
        $m_wsdl = 'https://m2mconnect.ee.co.uk/orange-soap/services/MessageServiceByCountry?wsdl';

        try
        {
            $obj_soap_client_handle = new SoapClient($m_wsdl, $m_arr_soapclient);
//      var_dump($obj_soap_client_handle->__getFunctions());
//      var_dump($obj_soap_client_handle->__getTypes());
        }
        catch (SoapFault $m_obj_exception)
        {
            trigger_error($m_obj_exception);
        }

        return $obj_soap_client_handle;
    }
}


$app->get(
    '/process-soap',
    function(Request $request, Response $response) use ($app)
    {
        $soap_peek_messages = $this->get('peek_messages');
        $messages =  $soap_peek_messages->peek_messages();
        $messages =  implode("", $messages);


        //var_dump($soapclient->readMessages("17andrew","Mika2503",10,""));

        //echo "<pre>";
        //var_dump($txt = $soapclient->peekMessages("17andrew","Mika2503",10,""));
        //echo "</pre>";

//


        //  $xml = simplexml_load_string($txt);
        //  if ($xml === false) {
        //      echo "Failed loading XML: ";
        //      foreach(libxml_get_errors() as $error) {
        //          echo "<br>", $error->message;
        //  //    }
        //  } else {
        //      print_r($xml);
        //  }

        return $this->view->render($response,
            'soap-return.html.twig',
            [
                'css_path' => CSS_PATH,
                'landing_page' => LANDING_PAGE,
                'initial_input_box_value' => null,
                'page_title' => APP_NAME,
                'page_heading_1' => APP_NAME,
                'messages' => $messages,
                'homepage' => LANDING_PAGE . '/',
                'register' => LANDING_PAGE . '/register',
                'login' => LANDING_PAGE . '/login',
                'contact' => LANDING_PAGE . '/#contact'

            ]);
    });
