<div id="comment<?php echo $id?>" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <div class="modal-content" style="width:50%;margin:0 auto;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">Comments</h4>
      </div>
      <div class="modal-body">
		<div style="overflow-y:scroll;">
			<?php $sqlcom = mysql_query("select * from teacher where teacher_id='$id'");
				  $rows = mysql_fetch_array($sqlcom);
				 $ids = $rows['idnumber'];
				 $id;
				  $sqltd = mysql_query("select * from feedback where idnumber='$ids' ORDER by feedback_id DESC");
			while($rowcom = mysql_fetch_array($sqltd)){?>
				<p style="padding:10px;border-radius:10px;" class="well">
					<?php echo $rowcom['comments'];?>
				</p>
			<?php } ?>
	   
	   </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>