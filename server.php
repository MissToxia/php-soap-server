<?php

class server
{
	private $hostname;
	private $username;
	private $dbname;
	private $usertable;
	private $yourfield;
	private $password;

	public function __construct()
	{
		include '../connection.php'; //excluded from git but just requires a $con_hostname, $con_username, $con_dbname, $con_password
		$this->hostname = $con_hostname;
		$this->username = $con_username;
		$this->dbname = $con_dbname;
		$this->password = $con_password;
		mysql_connect($this->hostname, $this->username, $this->password);
		mysql_select_db($this->dbname);
	}

	public function getUserRealname($id_array)

	{
		$id = $id_array['id'];
		$query = "SELECT * FROM user WHERE id = '$id'";
		$result = mysql_query($query);

		 if ($result) {
			while($row = mysql_fetch_array($result)) {
				$name .= $row['realname'];
				//echo "Name $name<br>";
			}
			return "id $id is " . $name . " from database ";
		}
		else
		{
			return "no results";
		}
	}
}

$params = array('uri' => 'toxia.net/soap/server.php');
$server = new SoapServer(NULL, $params);
$server->setClass('server');
$server->handle();

?>