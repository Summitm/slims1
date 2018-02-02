<?php

class Connection{
	private $conn;
	private $port;
	private $db_host = 'localhost';
	private $db_user = 'root';
	private $db_name = 'SlimsDB';

	//constructor
	public function __construct(){
		$this->conn = false;
		$this->port = '3360';
		$this->connect();
	}

	public function __destruct(){
		$this->disconnect();
	}

	//create connection
	public function connect(){
		if(!$this->conn){
			$this->conn = @mysqli_connect($this->db_host, $this->db_user,$this->db_pass);
			@mysqli_select_db($this->conn, $this->db_name) or die(mysqli_error($this->conn));;
			if(!$this->conn){
				$this->status_fatal = true;
				echo "Connection failed";
				die();
			}else{
				$this->status_fatal = false;
			}
		}//else
		return $this->conn;
	}
	//clossing db connection on page close
	public function disconnect(){
		if($this->conn){
			$close = @mysqli_close($this->conn);
			
		}
	}

}

?>