<?php
/**
 * Created by PhpStorm.
 * User: p14138628
 * Date: 13/01/2018
 * Time: 13:13
 */

class soappeekmessages
{

    private $messages;

    public function __construct(){
        $this->messages = null;
    }

    public function __destruct(){}


    public function peek_messages()
    {


    $p_obj_soap_client_handle = new SoapClient('https://m2mconnect.ee.co.uk/orange-soap/services/MessageServiceByCountry?wsdl');

        $p_m2m_account = [
            'm2m_username' => '17jamese',
            'm2m_password' => 'LouisE986',
        ];

        $soapfunction = 'peekMessages';
        $parameters = [
            'username' => $p_m2m_account['m2m_username'],
            'password' => $p_m2m_account['m2m_password'],
            'count' => 25,
            'deviceMsisdn' => '',
            'countryCode' => '',
        ];

        {
            try {
                $this->messages = $p_obj_soap_client_handle->__soapCall($soapfunction, $parameters);
            } catch (SoapFault $m_obj_exception) {
                trigger_error($m_obj_exception);
            }

        }

        return $this->messages;
    }

    public function return_array()
    {

    }
}