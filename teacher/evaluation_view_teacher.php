<?php 
include("../dbconnection.php");
$sy = $_POST['school_year'];

$sem = $_POST['semester'];



?>
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
<form action="" method="post">
<?php $id = $_POST['id']?>
			<table>
			<tr align="left">
				<td>Legend</td>
			</tr>
			<tr align="left">
				<td>5 - Outstanding</td>
			</tr>
			<tr align="left">
				<td>4 - Very Satisfactory</td>
			</tr>
			<tr align="left">
				<td>3 - Satisfactory</td>
			</tr>
			<tr align="left">
				<td>2 - Unsatifactory</td>
			</tr>
			<tr align="left">
				<td>1 - Poor</td>
			</tr>
			<tr align="left">
		
				<td><br/><a href="#" data-toggle="modal" data-target="#comment<?php echo $id?>" class="btn btn-primary"><span class="glyphicon glyphicon-list"></span> View Comments</a></td>
			</tr>
			
		</table>
			<?php include('modal_comment.php');?>
		<table style="float:right">
				<?php 
			$count =0;
			$te=0;
			$tes=0;
			$total=0;
			$ave=0;
			$s=0;
			
			$sql = mysql_query("select * from evaluationform");
			while($row = mysql_fetch_array($sql)){ $idr = $row['evaluate_id']; ?>
			<?php $sqlh = mysql_query("select * from evaluation_content where evaluationheader_id='$idr'");
			
			?>
				<?php while($rowh = mysql_fetch_array($sqlh)){
				$idh = $rowh['evaluation_content_id'];?>
				<?php $sqlc = mysql_query("select * from evaluation_content where evaluationheader_id='$idh'");?>
										<?php while($rowc = mysql_fetch_array($sqlc)){
										$idc = $rowc['evaluation_content_id'];
										$rw = mysql_num_rows($sqlc);
										$sqld = mysql_query("select * from teacher_evaluation_result where evaluation_content_id = '$idc' AND teacher_id='$id' AND school_year='$sy' 
										 AND semester='$sem'");
										$count = mysql_num_rows($sqld);
						$te=$rw;		
						}}}?>
						
					<tr>	
					<td>
					<?php echo "Semester ".$sem?>
					</td>
				
				</tr>
				<tr>
	
					<td>
					<?php echo "School Year ".$sy?>
					</td>
				
				</tr>
				
				
				
		</table>
			<?php $sql = mysql_query("select * from evaluationform");
			while($row = mysql_fetch_array($sql)){
				$idr = $row['evaluate_id']; ?>
					<table class="table">
					<thead>
						<tr>
						<th><?php echo $row['evaluate_description'] ?></th>
										
						<th></th>
						</tr>
					</thead>
					<tbody>
				<?php $sqlh = mysql_query("select * from evaluationform where evaluate_id='$idr'");?>
				<?php while($rowh = mysql_fetch_array($sqlh)){
				$idh = $rowh['evaluate_id'];?>
					
					
						<tr>
							<td>
								<table width="100%">
									<tr>
										<th  style="width:80%;"></th>
										<th style="width:40%;">Ratings</th>
									</tr>

										<?php $sqlc = mysql_query("select * from evaluation_content where evaluationheader_id='$idh'");
										 $sqlc1 = mysql_query("select * from evaluation_content");
										 $d=mysql_num_rows($sqlc1);
										
									 while($rowc = mysql_fetch_array($sqlc)){
										$idc = $rowc['evaluation_content_id'];
										
										$sqld = mysql_query("select * from teacher_evaluation_result where evaluation_content_id = '$idc' AND teacher_id='$id' AND school_year='$sy' 
										 AND semester='$sem'");
										
										
										$count = mysql_num_rows($sqld);
										$tes=$count;										
										if($count<=0){
											$count = 0;
											
										$sqle = mysql_query("select sum(ratings) from teacher_evaluation_result where evaluation_content_id = '$idc' AND teacher_id='$id' AND school_year='$sy' 
										 AND semester='$sem'");
										
										$rowe = mysql_fetch_array($sqle);
										$s = mysql_num_rows($sqle);
										$rating = $rowe['sum(ratings)'];
										
										}else{
										$sqle = mysql_query("select sum(ratings) from teacher_evaluation_result where evaluation_content_id = '$idc' AND teacher_id='$id' AND school_year='$sy' 
										 AND semester='$sem'");
										$s = mysql_num_rows($sqle);
										$rowe = mysql_fetch_array($sqle);
										$rating = $rowe['sum(ratings)']/$count;
										}
										$total=$rating+$total;
										
										?>
										<input type="hidden" value ="<?php echo $idc?>" name="id[]">
									<tr>
										<td style="width:80%;"><?php echo $rowc['Description'];?></td>
										<td style="width:20%;"><?php echo $rating?></td>
										
									</tr>
									<?php }?>
								</table>
						
							
						</tr>
						
						
					<?php }?>
						
					</tbody>
					</table>
			
			<?php }?>
				<tr>
				<table>
				<?php echo "<b>Overall total Items: </b>"?><?php echo "<b style='float:right'>".$d."</b>"?><br/>
				<?php echo "<b>Overall total points:</b>"?><?php echo "<b style='float:right'>".$total."</b>"?><br/>
				<?php echo "<b>Average:</b>"?><?php echo "<b style='float:right'>".round($total/$d,2,PHP_ROUND_HALF_UP)."</b>"?><br/>
				
		</form>
	
  </div>
   </div>
</div>
</div>

