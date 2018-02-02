<?php
session_start();
require_once('../InitiateConn/login.class.php');
$log = new Verifier();

if(!$log->get_session()){
	header('Location:index.php');
}
$user_id = $_SESSION['regno'];

?>

<!DOCTYPE html>
<html>
	<head>

		<title>C-Panel</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/Userdash.css">
		<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
		

	</head>

	<body class="html" data-spy="scroll" data-target=".navigate" data-offset="50">
		<div class="row" >
			<nav class="navbar-default navbar-static-top navbar-inverted navigate" role="navigation">
				<div class="container">
					<a class="navbar-brand" id="menu-button" href="" style="color: #ffffff;"> 
						<span class="glyphicon glyphicon-menu-hamburger" style="color: #f00;"></span>
					</a>
					<div class="pull-right"><span style="color: #f00;">loggedin us <br/><?php echo $user_id;?></span></div>
					<div class="user-image pull-right">
						<a href="" class="user-image-displayed">
							<button class="btn boxer">
								<span class="fa fa-power-off"><?php $log->logout();?>
							</button>
							<!--box to be displayed if user clicks the profile img at the top-right corner for logout and account details--> 
							<div class="mybox dropdown">
								<div class="first-row">
									<a href="">
										<div class="image-changer"></div>
										<span class="">Change</span>
									</a>
									<div><?php echo $user_id;?></div>
									<hr>
									<button class="btn"><span class="fa fa-power-off"></span></button>
								</div>
							</div>
						</a>
					</div>


				</div>
			</nav>
		</div>

		<div class="row row-1">
			<div class="col-ahover" id="aside">
				<ul class="nav nav-pills nav-stacked" id="mytabs">

					<li><a class="active" href="#Home" data-toggle="tab">Home</a></li>

					<li><a href="#History" data-toggle="tab">History</a></li>

					<li><a href="#Profile" data-toggle="tab"><span class="fa fa-user" style="color:black;"></span>Profile</a></li>

				</ul>
				
			</div>

			<!--the container that holds content of the .nav tabs-->
			<div class="col-xs-12 col-sm-12 col-md-12 col-fill-static">
				<div class="tab-content ">
				<?php
				echo $user = $log->get_session();
				
				 ?>
					<!-- <div class="breadcrumb">
						
					</div> -->

					<div class="tab-pane active clearfix" id="Home">

					</div>


					<div class="tab-pane" id="History">
						
					</div>


					<div class="tab-pane" id="Profile">
						
					</div>


				</div>

			</div>

		</div>
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../js/ScrollSpy.js"></script>

	</body>
</html>