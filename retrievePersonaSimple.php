<?php

$client = new SoapClient("http://10.200.51.10/HallOfFame/HallOfFameService/Service1.asmx?wsdl");

/* Invoke webservice method */
$response = $client->__soapCall("RetrievePersonaSimple", array());

/* Print webservice response */

foreach(get_object_vars($response) as $key => $value){
    echo $key.':'.$value.PHP_EOL;
}

?>