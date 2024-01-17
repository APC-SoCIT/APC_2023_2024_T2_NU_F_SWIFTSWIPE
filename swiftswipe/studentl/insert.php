<?php
// include db connection
include 'config.php';

if(isset($_POST['upload'])){
    
    $rfid_no = $_POST['rfid_no'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $section = $_POST['section'];
    $strand = $_POST['strand'];
    $pname = $_POST['pname'];
    $pnum = $_POST['pnum'];
    $address = $_POST['address'];

    $IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc,'uploadImage/'.$img_name);

    // insert data

    mysqli_query($con,"INSERT INTO `student`( `rfid_no`,`fname`,`lname`,`section`,`strand`,`pname`, `pnum`,`address`,`pp`) 
    VALUES ('$rfid_no','$fname','$lname','$section','$strand','$pname','$pnum','$address','$img_des')");
    header("location:index.php");

}

?>