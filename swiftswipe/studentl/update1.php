<?php
include 'config.php';
if(isset($_POST['update'])){
    $ID = $_POST['id'];
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

    mysqli_query($con,"UPDATE `student` SET `rfid_no`='$rfid_no',`fname`='$fname',`lname`='$lname',`strand`='$strand',`section`='$section',`pname`='$pname',`pnum`='$pnum',`address`='$address',`pp`='$img_des' WHERE id = '$ID'");
    header("location:index.php");


}
?>