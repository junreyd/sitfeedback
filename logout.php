<?php
session_start();
session_destroy();
header('location:/sitfeedback/index.php');

?>