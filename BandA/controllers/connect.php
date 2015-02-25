<?php

define("DB_HOST", 'localhost');
define("DB_NAME", 'beforeandafter');
define("DB_USER", 'root');
define("DB_PASSWORD", '');

class Connect{

    //databse connection
	var $dbc;
	//store connection status
	var $connection_status;


    function __construct()
	{
		//set database connection to null
		$this->dbc = null;
		//set connection status to true
		$this->connection_status=true;
	}

    //check if connected to mysql server
	function connect_server(){
		//set connection status to true
		$this->connection_status = true;
		//try connectiong to mysql server
		$this->dbc = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD);
		//check if successfully connected to mysql server
		if (!$this->dbc) {
			//set connection_status to false if not connected to server
			$this->connection_status = false;
		}
		//return connection status
		return $this->connection_status;
	}

    //select database
	function pickdatabase($dbname, $dblink){
		//set connect_status to true
		$this->connection_status = true;
		//try connect to databse by name $dbname
		if (!mysqli_select_db($dblink, $dbname)) {
			$this->connection_status = false;
			echo "No database selected, check DB_NAME";
			exit();
		}
		return $this->connection_status;
	}

}
?>