<?php
include '../config.php';
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
    $grade = $_POST['grade'];
    $student_no = $_POST['student_no'];


    mysqli_query($conn,"UPDATE `student` SET `rfid_no`='$rfid_no',`fname`='$fname',`lname`='$lname',`strand`='$strand',`section`='$section',`pname`='$pname',`pnum`='$pnum',`address`='$address',`grade`='$grade',`student_no`='$student_no' WHERE id = '$ID'");


    $update_image = $_FILES['update_image']['name'];
    $update_image_size = $_FILES['update_image']['size'];
    $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
    $update_image_folder = '../uploaded_img/'.$update_image;
 
    
    if(!empty($update_image)){
       if($update_image_size > 2000000){
          $message[] = 'image is too large';
       }else{
          $image_update_query = mysqli_query($conn, "UPDATE `student` SET pp = '$update_image' WHERE id = '$ID'") or die('query failed');
          if($image_update_query){
             move_uploaded_file($update_image_tmp_name,$update_image_folder);
          }
          $message[] = 'image updated succssfully!';
       }
    }
 
 
    header("location:index.php");


}
?>