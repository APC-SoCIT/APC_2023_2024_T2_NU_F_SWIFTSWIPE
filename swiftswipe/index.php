<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, ($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['id'] = $row['id'];
      header('location:user/home.php');
   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="icon" type="image/x-icon" href="logo/logosystem.png"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Swiftswipe</title>
</head>
<body>


    <div class="proto-container">
        <div class="proto"></div>
        <div class="proto"></div>
        <div class="proto"></div>
        <div class="proto"></div>
    </div>

    <div class="container">
        <div class="inner">
            <div class="left">
                <img src="logo/logo.png" alt="swiftswipelogo" class="logo">

                <div class="content">
                    <h1>Tap in <span>access granted, journey secured.</span></h1>

                    <p>This system ensures efficiency, eliminates the hassle of traditional ID checks, and fosters a safe and seamless experience for students as they navigate their educational journey.</p>
                    <p class="light">Copyright © 2024 Swiftswipe</p>
                </div>
            </div>
            <div class="right">
                <center><h2 style="color:#4D535B">Login Now!</h2></center>
                <form action="" method="post" enctype="multipart/form-data">
      
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="email" name="email" placeholder="Enter email"  required>
      <input type="password" name="password" placeholder="Enter password" required>
     
   

                <div class="attention">
                <button type="submit" name="submit">Login</button>
                </div>
            </div>
        </div>
    </div>
    </form>

<script>
        
        let left = document.querySelector('.left');
        let content = document.querySelector('.content');
        let protos = document.querySelectorAll('.proto');

        left.addEventListener('mousemove', (event) => {
            let move = (event.clientX * 0.05) + 4;
            let move2 = (event.clientX * 0.003);
            content.style.transform = `translateX(-${move2}%)`;

            protos.forEach((proto) => {
                proto.style.transform = `translateX(${move}%)`;
            })
        })
</script>

</body>

</html>