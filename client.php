<?php

class client
{
	public function __construct()
	{
		$params = array('location' => 'http://www.toxia.net/soap/server.php',
						'uri' => 'http://www.toxia.net/soap/',
						'trace' => 1);
		$this->instance = new SoapClient(NULL, $params);
	}

	public function getName($id_array)
	{
		return $this->instance->__soapCall('getUserRealname',$id_array);
	}	
}

$client = new client; 

?>