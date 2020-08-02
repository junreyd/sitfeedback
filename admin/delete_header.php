
<?php include('../header.php');?>
<?php include('../session.php');?>
<?php include('../dbconnection.php');?>
<?php 	
$id = $_GET['id'];
mysql_query("DELETE FROM evaluationform  where evaluate_id = '$id'");
header("location:evaluation_teacher.php");

?>