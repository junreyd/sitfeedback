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

<div class="table-responsive">
	<h4>Facilities Comment(s)</h4>	
		<br/>
	<table id="example" class="table table-striped table-bordered" align="center">
	<thead>
		<tr>
			<th>Facilities</th>
			<th>Action</th>
		</tr>
	</thead>
		<?php $b = "BS"?>
	<tbody>
	<?php $sql = mysql_query("select * from feedback where teacher_category >=1 group by teacher_category ORDER BY  `feedback`.`feedback_id` DESC ")?>
		<?php while($row = mysql_fetch_array($sql)){
		$cat =$row['teacher_category'];
		$s = mysql_query("select * from facilities where facilities_id='$cat'");
		$rows = mysql_fetch_array($s);
		$id=$row['teacher_category'];
			?>
		<tr>
			<td><?php echo $rows['facilities_description']?></td>
		
				<input type="hidden" name="id" value="<?php echo $id;?>">
		
			<td>
				<button  class="btn btn-primary"  data-toggle="modal" data-target="#comment<?php echo $cat?>" ><span class="glyphicon glyphicon-list">&nbsp;</span>Comment</button>
				<button type="submit" class="btn btn-danger"><a href="delete_feedback.php?id=<?php echo $id?>" style="color:#ffffff"class="glyphicon glyphicon-remove"></a></button>
			</td>
		
			</tr>
		<?php  
			include("modal_feedback.php");} ?>
	
	</tbody>
	</table>
  </div>
   </div>
</div>