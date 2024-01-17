<?php
include 'config.php';
 $ID = $_GET['id'];
mysqli_query($con,"DELETE FROM `student` WHERE Id = $ID");

header('location:index.php');

?>