<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
     <link rel="stylesheet" type="text/css" href="css.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />	

</head>
<body>
<nav class="navbar sticky-top " style="background-color: white; box-shadow: 0 0 10px 5px rgba(0,0,0,0.1);">
  <div class="container-fluid">
    <div class="navbar-brand">
      <img
        src="../image/slogo1.png"
        class="me-2"
        height="50"
        alt="nu logo"
        loading="lazy"
      />
      <large>Swiftswipe</large>

      
      </div>
      <div class="m-4">
          <a href="home.php" class="anav1 m-1">Home</a>
          <a href="daily.php" class="anav1 m-1">Daily Attendance</a>
          <a href="monthly.php" class="anav1 m-1">Monthly Report Student</a>
      </div>
      
      <div class="m-4">
      <a class="anav1" href="message.php"><i class="fa-solid fa-message fa-xl"></i></a>
      <a class="anav1 m-1"href="logout.php"><i class="fa-solid fa-right-from-bracket fa-xl m-1"></i></i></a>

      
      </div>
      </div>



  </div>

</nav>




<p class="m-3">Hello, <?php echo $_SESSION['fname']; ?></p>
     <h1>today is <?php echo date("m/d/Y"); ?></h1>

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>