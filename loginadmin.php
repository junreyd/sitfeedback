 <?php require_once('dbconnection.php');
session_start();

 if(isset($_POST['admin'])) {
   $myusername = mysql_real_escape_string($_POST['idnumber']);
	 $mypassword = mysql_real_escape_string($_POST['password']);
		
     
      $result = mysql_query("SELECT * FROM admin WHERE username = '$myusername' AND password='$mypassword'");
      $row = mysql_fetch_array($result);
      
      $count = mysql_num_rows($result);
      
      if($count != 0) {
		
       $_SESSION['id']=$row['admin_id'];
         
       header("location:admin/index.php");
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
  <title>Admin Login</title>
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
      <a class="navbar-brand" href="index.php">Welcome Administrator</a>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4 well">
      <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
        <fieldset>
          <legend>Please Sign in ..</legend>
          
          <div class="form-group">
            <label for="name">Username</label>
            <input type="text" name="idnumber" placeholder="Username" required class="form-control" />
          </div>

           <div class="form-group">
            <label for="name">Password</label>
            <input type="password" name="password" placeholder="Password" required class="form-control" />
          </div>
          <div class="form-group">
            <input type="submit" name="admin"  value="Log in" class="btn btn-primary" />
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