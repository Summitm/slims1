<?php

?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/sign_up.css">
	</head>
	<body class="container">
		<form action="<?php $_PHP_SELF?>" method="post" role="registration" name="form-2" class="">
			<fieldset class="reg">
				<legend>SLIMS Sign Up</legend>
				<div class="help-block">All fields with <b style="color:red">*</b> must be filled.</div>
				<div class="form-group">
					<label for="regno" class="control-label">Registration Number<b style="color:red">*</b></label>
					<input type="text" name="regno" value="" placeholder="AB1/12345/12" class="form-control">
				</div>
				<div class="form-group">
					<label for="fname" class="control-label">First Name<b style="color:red">*</b></label>
					<input type="text" name="fname" Placeholder="Sun" class="form-control">
				</div>
				<div class="form-group">
					<label for="lname" class="control-label">Last Name<b style="color:red">*</b></label>
					<input type="text" name="lname" Placeholder="Skin" class="form-control">
				</div>
				<div class="form-group">
					<label for="course" class="control-label">Course<b style="color:red">*</b></label>
					<input type="text" name="course" Placeholder="Bsc. Computer Science" class="form-control">
				</div>
				<div class="form-group">
					<label for="mail" class="control-label">Email<b style="color:red">*</b></label>
					<input type="email" name="mail" Placeholder="sunskin@abc.com" class="form-control">
				</div>
				<div class="form-group">
					<label for="phone" class="control-label">Phone<b style="color:red">*</b></label>
					<input type="phone" name="phone" Placeholder="Bsc. Computer Science" class="form-control">
				</div>
				<div class="form-group">
					<label for="password" class="control-label">Password<b style="color:red">*</b></label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<label for="confirm-password" class="control-label">Confirm Password<b style="color:red">*</b></label>
					<input type="password" name="mail" class="form-control">
				</div>
				<div class="form-group"> 
					<button type="submit" name="register" class="btn pull-right" style="color: #000">Register</button>
					<button type="clear" name="register" class="btn pull-right" style="color: #000">Clear</button>
				</div>
			</fieldset>
		</form>

		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.css"></script>

	</body>
</html>