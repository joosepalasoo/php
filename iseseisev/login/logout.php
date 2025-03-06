<!--kt  -->
<!--joosep alasoo it-23--> 
<!--06.03.25-->
<?php session_start();
session_destroy();
header("location:../index.php");
exit;
?>