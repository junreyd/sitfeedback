<div id="comment<?php echo $cat?>" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <div class="modal-content" style="width:100%;margin:0 auto;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">Comments</h4>
      </div>
      <div class="modal-body">
      <div style="overflow-y:scroll">
      <?php 
          $sqltd = mysql_query("select * from feedback where teacher_category='$cat' ORDER BY feedback_id DESC");
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