<?php
if(isset($_POST['saved'])){
include("../dbconnection.php");

$id = $_POST['id'];
$sy = $_POST['school_year'];
$teacher = $_POST['teacher'];
$semester = $_POST['semester'];
$ratings = $_POST['ratings'];
$comment =$_POST['comment'];
$select = mysql_query("select * from teacher where teacher_id='$teacher'");
$row = mysql_fetch_array($select);
$idnum = $row['idnumber'];
for($j = 0;$j<count($id);$j++){	
$id_x = $id[$j];
$rate = $ratings[$j];
$sql = mysql_query("select * from teacher_evaluation_result where evaluation_content_id='$id_x' AND teacher_id='$teacher' AND school_year='$sy'
AND semester ='$semester'");
if(mysql_num_rows($sql)>0){?>
	<script>
		  alertify.alert("Your have already evaluated this teacher");
		 
	</script>
	
<?php  }else{
mysql_query("INSERT INTO teacher_evaluation_result(`evaluation_content_id`, `teacher_id`, `ratings`, `school_year`,`semester`)
 VALUES ('$id_x','$teacher ','$rate','$sy','$semester')");
 
 ?>
 
<?php } }
$sel = mysql_query("select * from teacher where idnumber='$idnum'");

mysql_query("INSERT INTO feedback(`comments`,`idnumber`) 
VALUES ('$comment','$idnum')");
?>


<?php 
 ?>
<script>
		 //alertify.alert("You have successfully evaluated");
		 window.location = "teacher_category.php";
	</script>
<?php }
 ?>
