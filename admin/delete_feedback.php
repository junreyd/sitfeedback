<?php 
include("../dbconnection.php");

$id=$_GET['id'];


mysql_query("DELETE FROM `feedback` WHERE teacher_category = '$id'");
header("location:feedback.php");
?>