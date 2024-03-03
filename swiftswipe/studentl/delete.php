<?php
include '../config.php';
 $ID = $_GET['id'];

$Record = mysqli_query($conn,"SELECT * FROM `student` WHERE id=$ID");
$data = mysqli_fetch_array($Record);

$rfid_no = $data['rfid_no'];
$fname = $data['fname'];
$lname = $data['lname'];
$section = $data['section'];
$strand = $data['strand'];
$pname = $data['pname'];
$pnum = $data['pnum'];
$address = $data['address'];
$grade = $data['grade'];
$student_no = $data['student_no'];
$pp = $data['pp'];


// insert data

mysqli_query($conn,"INSERT INTO `archive`(`rfid_no`,`grade`,`student_no`,`fname`,`lname`,`section`,`strand`,`pname`, `pnum`,`address`,`pp`) 
VALUES ('$rfid_no','$fname','$student_no','$grade','$lname','$section','$strand','$pname','$pnum','$address','$pp')");


mysqli_query($conn,"DELETE FROM `student` WHERE Id = $ID");

header('location:index.php');

?>