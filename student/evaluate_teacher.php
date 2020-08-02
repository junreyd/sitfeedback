<?php 
	include("../dbconnection.php");
$id = $_GET['id'];




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
<form action="preview.php" method="post">

<?php $idg = $_GET['id']?>
		<input type="hidden" value="<?php echo $idg?>" name="ids">
		
		<table  align="center" style="text-align:center">
		<tr>
			<td colspan="4"><b>SALAZAR COLLEGES OF SCIENCE AND INSTITUTE OF TECHNOLOGY</b></td>
		</tr>
		<tr>
			<td colspan="4">Poblacion, Madridejos, Cebu City</td>
		</tr>
	
		<tr>
			<td colspan="4"><br/></td>
		</tr>
		<tr>
			<td colspan="4">Teacher Performance Evaluation Instrument for students<br/></td>
		</tr>
		<tr>
			<td colspan="4"><br/></td>
		</tr>
		</table>
		<table class="table">
						<tr>
				<td>Teacher Name: </td>
				<td><?php $idt = $_GET['id'];
					$sqlt = mysql_query("select * from teacher where teacher_id ='$idt'");
					$rowt = mysql_fetch_array($sqlt);
					echo "<b> &nbsp;".$rowt['teacher_firstname']." ".$rowt['teacher_lastname']."</b>";
				?></td>
				<input type="hidden" value="<?php echo $idt?>" name="teacher">
				<td>Sem: </td>
				<td><select name="semester" required>
					<option></option>
					<option>1st</option>
					<option>2nd</option>
				</select></td>
			</tr>
				<td>Sch Yr: </td>
				<td><select name="school_year" required>
					<option></option>
					<option>2017-2018</option>
					<option>2018-2019</option>
					<option>2019-2020</option>
					<option>2020-2021</option>
					<option>2021-2022</option>
					<option>2022-2023</option>				
				</select></td>


			</tr>
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
				<td>2- Unsatifactory</td>
			</tr>
			<tr align="left">
				<td>1 - Poor</td>
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
								<table>
										<?php $ducsql = mysql_query("select * from evaluation_content where evaluationheader_id='$idh'");?>
										<?php while($rowc = mysql_fetch_array($ducsql)){
										$idc = $rowc['evaluation_content_id'];?>
										<input type="hidden" value ="<?php echo $idc?>" name="id[]">
									<tr>
										<td><?php echo $rowc['Description'];?></td>
										
										<td><span>1</span><input type="radio" value="1" id="rating" class="radioBtnClass" name="rating<?php echo $idc?>" required></td>
										<td><span>2</span><input type="radio" value="2" id="rating" class="radioBtnClass"name="rating<?php echo $idc?>" required></td>
										<td><span>3</span><input type="radio" value="3" id="rating" class="radioBtnClass" name="rating<?php echo $idc?>" required></td>
										<td><span>4</span><input type="radio" value="4" id="rating" class="radioBtnClass"name="rating<?php echo $idc?>" required></td>
										<td><span>5</span><input type="radio" value="5" id="rating"  class="radioBtnClass"name="rating<?php echo $idc?>" required></td>
										
									</tr>
									<?php }?>
								
								</table>
							</td>
						</tr>
						
						
					<?php }?>
					
					</tbody>
					</table>
			
			<?php }?>
				<tr>
					<td>
						Comment Box: 
					</td>
					<td><textarea name="comment" class="form-control"></textarea></td>
					</tr>
					<tr>
					<br/>
						<td><input type="submit"  class="btn btn-primary" name = "save" value="Preview"></td>
					</tr>
			<table>							
		</form>	
  </div>
 </div>
</div>

