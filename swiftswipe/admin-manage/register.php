<?php

include '../config.php';

if(isset($_POST['submit'])){

   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, ($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, ($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = '../uploaded_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `admint` WHERE username = '$username' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'Username already exist'; 
   }else{
      if($pass != $cpass){
         $message[] = 'Confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'Image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `admint`(username, email, password, image) VALUES('$username', '$email', '$pass', '$image')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'Registered successfully!';
            header('location:index.php');
         }else{
            $message[] = 'registeration Failed!';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Add Admin</title>
	<meta charset="utf-8">
   <link rel="icon" href="../logo/logosystem.png">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
	<link rel="stylesheet" href="user1.css">


</head>
<body>
   
<div class="update-profile">

   <form action="" method="post" enctype="multipart/form-data">

      <h1>Add New Admin</h>



      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <div>
      <span>Profile Picture:</span>
      <input type="file" name="image" class="input1" accept="image/jpg, image/jpeg, image/png">
      </div>
      <div class="flex">
      <div class="inputBox">
      <span>Username:</span>
      <input type="text" name="username" placeholder="Enter username" class="box" required>
      <span>Email:</span>
      <input type="email" name="email" placeholder="Enter email" class="box" required>
   </div>
      <div class="inputBox">
      <span>Password:</span>
      <input type="password" name="password" placeholder="Enter password" class="box" required>
      <span>Confirm Password:</span>
      <input type="password" name="cpassword" placeholder="Confirm password" class="box" required>
      </div>
      </div>
      <input type="submit" value="Add" name="submit" class="btn">
      <a href="index.php" class="delete-btn">Cancel</a>
   </form>



</body>
</html>