<?php
// include db connection
include '../config.php';

if(isset($_POST['upload'])){
    
    $rfid_no = $_POST['rfid_no'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $section = $_POST['section'];
    $strand = $_POST['strand'];
    $pname = $_POST['pname'];
    $pnum = $_POST['pnum'];
    $address = $_POST['address'];
    $grade = $_POST['grade'];
    $student_no = $_POST['student_no'];

    $IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = $img_name;
    move_uploaded_file($img_loc,'../uploaded_img/'.$img_name);

    // insert data

    mysqli_query($conn,"INSERT INTO `student`(`rfid_no`,`fname`,`student_no`,`grade`,`lname`,`section`,`strand`,`pname`, `pnum`,`address`,`pp`) 
    VALUES ('$rfid_no','$fname','$student_no','$grade','$lname','$section','$strand','$pname','$pnum','$address','$img_des')");
    header("location:index.php");

}

?>