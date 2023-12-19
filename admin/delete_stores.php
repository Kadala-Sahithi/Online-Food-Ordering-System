<?php
include("../connection/connect.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM BVRITFoodStall WHERE fs_id = '".$_GET['fs_del']."'");
header("location:allfoodstall.php");  

?>
