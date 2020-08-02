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
<div class="col-xs-6 col-centered" style="width:70%;margin:0 auto">
	<table id="example" class="table table-striped table-bordered" align="center">
	<thead>
		<tr>
			<th>Teacher Name</th>
			
			<th>Semester</th>
			<th>Year</th>
			<th>Action</th>
		</tr>
	</thead>
		
	<tbody>
	<?php $sql = mysql_query("select * from teacher")?>
		<?php while($row = mysql_fetch_array($sql)){
			$id=$row['teacher_id'];?>
		<tr>
			<td><?php echo $row['teacher_firstname']." ".$row['teacher_lastname']?></td>
			<form action="evaluation_view_teacher.php" method="post">
				
			<td>
					<select name="semester" class="form-control" required>
					<option></option>
					<option>1st</option>
					<option>2nd</option>
				</select>
				
				
			</td>
			
		
				<input type="hidden" name="id" value="<?php echo $id;?>">
		
			<td>
			<select name="school_year" class="form-control"required>
					<option></option>
					<option>2017-2018</option>
					<option>2018-2019</option>
					<option>2019-2020</option>
					<option>2020-2021</option>
					<option>2021-2022</option>
					<option>2022-2023</option>
					
				</select>
			</td>
			<td>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-th-list">&nbsp;</span>View Evaluation</button>
	
			</td>
			</form>
			</tr>
		<?php } ?>
	
	</tbody>
	
  </div>
   </div>
</div>
