<?php

include '../config.php';
session_start();
$id = $_SESSION['id'];

if(!isset($id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($id);
   session_destroy();
   header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="icon" type="../image/x-icon" href="../logo/logosystem.png"> 
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="user.css">
  <link rel="stylesheet" href="user1.css">
  <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="user.css">
  <link rel="stylesheet" href="user1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Monthly Report</title>
</head>
<body>



<header class="header2">
            <a class="logo" href="home.php"><img src="../logo/logo.png" height="45px" alt="logo"></a>
            <nav >
                <ul class="nav__links">
                    <li><a href="home.php" >Home</a></li>
                    <li><a href="daily.php">Daily Attendance</a></li>
                    <li><a href="month.php"  class="active">Monthly Report</a></li>
                </ul>
            </nav>
            <div style="align-items:center; display:flex;">
            <?php
         $select = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img class="cta"" height="30" src="../images/default-avatar.png">';
         }else{
            echo '<img  class="cta" height="30" src="../uploaded_img/'.$fetch['image'].'">';
         }
      ?>
      <div class="dropdown">
         <p class="cta">Hello, <?php echo $fetch['email']; ?> <i class="fa-solid fa-caret-down"></i></p>
         <div class="dropdown-content">
        <a href="update_profile.php">Profile</a>
        <a href="home.php?logout=<?php echo $id; ?>">Logout</a>
        </div>
</div>
         </div>
            <p class="menu cta"><i class="fa-solid fa-bars"></i></p>

        </header>
        <div id="mobile__menu" class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="home.php">Home</a>
                <a href="daily.php">Daily Attendance</a>
                <a href="monthly.php" >Monthly Report</a>
                <a href="update_profile.php">Profile</a>
                <a href="home.php?logout=<?php echo $id; ?>">Logout</a>
            </div>
        </div>
        <script type="text/javascript" src="mobile.js"></script>

    



        <div class="form-container">
  <form action="data1.php" method="GET">
  <h2>SEARCH FOR STUDENT </h2>

  
  <input type="text"class="box"  name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" placeholder="Enter Student Number">
  <button type="submit" class="btn">Search</button>

  </form>
  </div>

</body>
</html>