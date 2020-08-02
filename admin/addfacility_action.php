<?php 
if(isset($_POST['save'])){
include("../dbconnection.php");
$fac = $_POST['facility'];

mysql_query("insert into facilities(facilities_description)
 values('$fac')");
header("location:facilities.php");
}

?>