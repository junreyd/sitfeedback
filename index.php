<?php include 'header.php';?>
<html>
<head>
	<title>SC-SIT FEEDBACK SYSTEM</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >

</head>


<body>


<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">SC-SIT Grading Inquiry via sms Nofication System</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['idnumber'])) { ?>
				<?php } else { ?>
				<li><a href="loginstudent.php">Login Teacher</a></li>
				<li><a href="loginteacher.php">Login Admin</a></li>
				<li><a href="loginadmin.php">About us</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>
		<?php include("banner.php") ?>


		
				<div class="panel panel-success" style="width:97%;margin:0 auto">
				
			  		<div class="panel-heading"><center><h4>About Developer</h4></center></div>
					   <div class="panel-body">	
							<div class="col-xs-12 col-sm-12">
								<p>This system was developed by Junrey Q. Ducay, through his knowledge about programming, reviewing books
									and collected some systems to gather idea in combining and implementing the component subsystem into one system.
									For few days to build he plan for the best way to deliver and present the whole
									functionality of SCSIT Feedback System.</p>	
											            					            		
						</div>
					          
				</div>
			</div>
		</div>
	</div>

</div>
		
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>

<hr>
	<?php include("footer.php") ?>

