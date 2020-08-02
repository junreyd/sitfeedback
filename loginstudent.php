<?php require_once('dbconnection.php');
  session_start();

   if(isset($_POST['log'])) {
      $myusername = mysql_real_escape_string($_POST['idnumber']);
	
     
      $result = mysql_query("SELECT * FROM student WHERE idnumber = '$myusername'");
      $row = mysql_fetch_array($result);

      
      $count = mysql_num_rows($result);
      

      if($count != 0) {

		
       $_SESSION['id']=$row['idnumber'];
         
       header("location:student/index.php");
      }else {
        	echo "<script> $.notify({
	title: '<strong>Warning!</strong>',
	message: 'Your Id number is not found'
},{
	type: 'danger'
});</script>";
      }
   }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Student Login</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" >
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
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
      <a class="navbar-brand" href="index.php">Welcome Student</a>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4 well">
      <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
        <fieldset>
          <legend>Sign in your ID number</legend>
          
          <div class="form-group">
            <input type="text" name="idnumber" placeholder="ID number" required class="form-control" />
          </div>

          <div class="form-group">
            <input type="submit" name="log" value="Log in" class="btn btn-primary" />
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>