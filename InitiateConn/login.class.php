<?php
	// require_once('db.class.php');
	include('db_config.php');

	class Verifier{
		public $db;



		public function __construct(){
			$this->db = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
			if(mysqli_connect_errno()){
				echo "<p style=color:red;>Error:Could not connect to databases</p>";
				exit;
			}
		}

		public function verify($username,$password){
			$username = mysqli_real_escape_string($this->db, $username);
			$password = mysqli_real_escape_string($this->db, $password);
			//check from db
			$sql = "SELECT * FROM `Login` WHERE `regno`='$username' AND `passwd`='$password'";
			$retval = mysqli_query($this->db,$sql);
			$user_data = mysqli_fetch_array($retval);
			$count = mysqli_num_rows($retval);
			if ($count == 1) {
				$_SESSION['regno'] = $user_data['regno'];
				return true;
			}else{
				return false;
			}
		}

		//getting the user who is logged in
		public function get_user($user){
			$sql2 = "SELECT regno FROM `Login` WHERE regno = '$user'";
			$retval2 = mysqli_query($this->db, $sql2);
			$user_data = mysqli_fetch_array($retval2);
			$user_data['regno'];
		}

		//get session
		public function get_session(){
			if(isset($_SESSION['regno'])){
				return true;
			}
		}

		//user logout
		public function logout(){
			session_destroy();
			unset($_SESSION['regno']);
			
		}
		//clossing class
	}
?>