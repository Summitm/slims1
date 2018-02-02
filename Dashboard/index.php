<?php
session_start();
require_once('../InitiateConn/login.class.php');
$log = new Verifier();

//defining variables
$log_error="";
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(!empty($username ) && !empty($password)){

		//verify if user exists
		$login = $log->verify($username,$password);

		if($login){//if exists then reload to
			sleep(1);
			header("Location:Userdash.php");

		}else{//otherwise
			$log_error = "This Username does not exist";
		}
	}else{
		echo "<script type='text/javascript'>
					$(document).ready(function(){
						$('.onlog').attr('disabled','disabled');

					});
			</script>";
		// echo "<span style=color:red>Hello me</span>";
	}
}


?>
<!DOCTYPE html>
<html>
	<head>
		<title>User Login</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/User.css">
		<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">


	</head>
	<body class="container">

		<!-- <div id="brand-name">
			<label >S-LIMS</label>
		</div> -->

		<form action="<?php $_PHP_SELF;?>" method="post" role="form" name="form1" data-toggle="validator" onsubmit="return validate();">

			<fieldset class="login">

				<span style="color:red;font-family: Tahoma Sans-serif;font-size: 12px;position: relative;text-align: center;">
					<?php echo $log_error;?>
				</span>

				<div class="form-group">
					<!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
					<label for="username">Username</label><br>
					<input type="text" name="username" value="" class="form-control" id="username">
				</div>

				<div class="form-group has-feedback has-warning">
					<label for="password">Password</label><br>
<!-- 					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>-->
					<input type="password" name="password" value="" class="form-control" id="inputPassword" oninput="return validatepass();">
 						
					<div class="help-block">Minimum length 6</div>

				</div>

				<div class="form-group">
					<button type="reset" name="clear" class="btn pull-right">CLEAR</button>

					<button type="submit" name="login" class="btn pull-right onlog" onclick="spinner();">LOGIN</button>

					<script type="text/javascript">
						function spinner(){
							$('.onlog').html("<i class='fa fa-spinner fa-pulse'></i><span class='sr-only'>Loading</span>");
						}
					</script>
				</div>
			</fieldset>
		</form>

		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../js/validate.js"></script>
		 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script> 
	</body>
</html>