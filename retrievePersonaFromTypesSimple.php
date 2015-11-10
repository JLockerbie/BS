<?php 

// Posted variables from Bright Sparks
$types = $_POST['types'];

 /* Create the client object */
   $soapclient = new SoapClient('http://10.200.51.10/HallOfFame/HallOfFameService/Service1.asmx?WSDL');

 /* Put type parameter in associative array and use the retrieve function */
   $params = array('types' => $types);
   $response = $soapclient->RetrievePersonaFromTypesSimple($params);

 /* Print webservice response */
   foreach(get_object_vars($response) as $key => $value){
     echo $key.':'.$value.PHP_EOL;
   }
?>