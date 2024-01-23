<?php 

include("base.php");

session_start();
session_destroy();
?>

<div class="h6"> Your are logged out</div>
<a href="login.php" class=""> login again </a>