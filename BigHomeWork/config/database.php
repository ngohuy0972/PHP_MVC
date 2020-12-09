<?php 

	class ConnectDB
	{
	    private $server = 'localhost';
	    private $username = 'root';
	    private $password = '';
	    private $database = 'milk';
	    protected function connect() {
	    	$connect = mysqli_connect($this->server, $this->username, $this->password, $this->database);
	    	//change character set to utf8
			mysqli_set_charset($connect, "utf8");
			// check connect
			if (mysqli_connect_error()) {
				echo 'Connect Failed'.mysqli_connect_error();
			}
			return $connect;

	    }
	}
	
 ?>