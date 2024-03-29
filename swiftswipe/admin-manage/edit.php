<?php

include '../config.php';
session_start();
$id = $_GET['id'];

if(isset($_POST['update_profile'])){

   $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);

   mysqli_query($conn, "UPDATE `admint` SET username = '$update_name', email = '$update_email' WHERE id = '$id'") or die('query failed');



   $new_pass = mysqli_real_escape_string($conn, ($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($conn, ($_POST['confirm_pass']));

   if(!empty($new_pass) || !empty($confirm_pass)){
      if($new_pass != $confirm_pass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "UPDATE `admint` SET password = '$confirm_pass' WHERE id = '$id'") or die('query failed');
         $message[] = 'password updated successfully!';
      }
   }

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = '../uploaded_img/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'image is too large';
      }else{
         $image_update_query = mysqli_query($conn, "UPDATE `admint` SET image = '$update_image' WHERE id = '$id'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
         $message[] = 'image updated succssfully!';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="../logo/logosystem.png">


   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title>Edit Admin</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="user1.css">

</head>
<body>
   
<div class="update-profile">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM `admint` WHERE id = '$id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <?php
         if($fetch['image'] == ''){
            echo '<img src="../images/default-avatar.png">';
         }else{
            echo '<img src="../uploaded_img/'.$fetch['image'].'">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
            <div>
            <span>Username:</span>
            <input type="text" name="update_name" value="<?php echo $fetch['username']; ?>" class="input1">
            </div>

      <div class="flex">
         <div class="inputBox">

         
            <span>Email:</span>
            <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
            <span>Update profile picture:</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
         </div>
         <div class="inputBox">

            <span>New password:</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
            <span>Confirm password:</span>
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
         </div>
      </div>
      <input type="submit" value="Edit" name="update_profile" class="btn">
      <a href="index.php" class="delete-btn">Cancel</a>
   </form>

</div>

</body>
</html>