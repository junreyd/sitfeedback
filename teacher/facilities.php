<img src="../image/finalheader.jpg" width="100%" height="50%" >
<?php include('head.php');?>
<style>

.row-centered {
    text-align:center;
}
.col-centered {
    display:inline-block;
    float:none;

    text-align:left;

    margin-right:-4px;
}
</style>
 <div class="row row-centered">
<div class="col-xs-6 col-centered" style="width:40%;margin:0 auto">
<div class="table-responsive">
	<form method="post">
		<table>
			<tr>
			<td>
			<label>Facilities</label>
			<select name="facilities" class="form-control" required>
				<option></option>
				<?php $sql = mysql_query("select * from facilities");
				while($f = mysql_fetch_array($sql)){?>
				<option value="<?php echo $f['facilities_id'];?>"><?php echo $f['facilities_description'];?></option>
				
				<?php }?>
				
			</select>
			
			</td>
			
			</tr>
		<tr>
		<td>
			
		</td>
		
		</tr>
		</table>
		<label>Comment Box:</label>
		<textarea class="form-control" name="comments" style="height:400px;"></textarea>
		<br/>
		<input type="submit" name="saves" class="btn btn-primary">
	</form>
	
  </div>
   </div>
</div>
<?php 
if(isset($_POST['saves'])){

include('../dbconnection.php');
$fac = $_POST['facilities'];
$comment = $_POST['comments'];

 mysql_query("INSERT INTO `feedback`(`comments`, `teacher_category`) 
 VALUES ('$comment','$fac')");
?>
<script>
  alertify.alert("Successfully Submitted");	 
	</script>
<?php 

}

?>