<?php include('../header.php');?>
<?php include('../session.php');?>
<?php include('../dbconnection.php');?>	
<div class="bs-example">
  <nav class="navbar navbar-inverse">

        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand"><span class="glyphicon glyphicon-home"></span>&nbsp;HOME</a>
        </div>

        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
				  <li class="dropdown"><a class="dropdown-toggle" href="facilities.php" href="#">&nbsp;Facilities</a>
				</li>
                 <li class="dropdown"><a class="dropdown-toggle" href="teacher_category.php" href="#">&nbsp;View Evaluation</a>
                </li>
              
            </ul>
			
			
			<ul class="nav navbar-nav navbar-right">
			 <li><a href="../logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
			</ul>
        </div>
    </nav>
</div>
