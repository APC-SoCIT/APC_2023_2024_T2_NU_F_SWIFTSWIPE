<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
  <link rel="icon" type="image/x-icon" href="../image/logo1.png">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<nav class="navbar fixed-top " style="background-color: white;">
  <div class="container-fluid">
    <div class="navbar-brand">
      <img
        src="../image/NU_sheild.svg"
        class="me-2"
        height="50"
        alt="MDB Logo"
        loading="lazy"
      />
      <large>Swiftswipe</large>
</div>
  </div>
</nav>

<div class="sidebar">
<a class="active" href="../admin/home.php"><i class="fa-solid fa-house"></i> Dashboard</a>
  <a href="../attendance-in/index.php"><i class="fa-solid fa-check"></i> Time In</a>
     <a href="../attendance-out/index.php"><i class="fa-solid fa-x"></i> Time Out</a>
     <a href="../strand/index.php"><i class="fa-solid fa-school"></i> Strands</a>
     <a href="../section/index.php"><i class="fa-solid fa-book"></i> Sections</a>
     <a href="../studentl/index.php"><i class="fa-solid fa-graduation-cap"></i> Students</a>
     <a href="../user-manage/index.php"><i class="fa-solid fa-user"></i> Users</a>
     <a href="tap-system"><i class="fa-solid fa-clipboard-user"></i> Tap System</a>
  
</div>


<div class="content">


<div class="container p-3">


<div class="row">
  <div class="col-sm divbg m-2">
<h1>Hello, <?php echo $_SESSION['name']; ?></h1>
</div>

</div>
  <div class="row">
  <div class="col-sm divbg1 m-2">

    <h3 class="m-2"><i class="fa-solid fa-calendar-days m-2"></i> Today is</h3>
    <h2 class="m-2"><strong><?php echo date('F, d, Y '); ?></strong></h2>
    </div>
    <div class="col-sm divbg2 m-2">
    <?php
               include_once("config.php");
               $result = mysqli_query($mysqli, "SELECT id FROM student ORDER BY id");
               $row = mysqli_num_rows($result);

               echo '
               <h3 class="m-2"><i class="fa-solid fa-graduation-cap m-2""></i> Total Students</h>
               <h2 class="m-2"><strong>'.$row.'</strong></h2>
               ';
               ?>
  
    </div>
    <div class="col-sm divbg3 m-2">
    <?php
               include_once("config.php");
               $result = mysqli_query($mysqli, "SELECT id FROM users ORDER BY id");
               $row = mysqli_num_rows($result);
               echo '<h3 class="m-2"><i class="fa-solid fa-user m-2"></i> Total Users</h>
               <h2 class="m-2"><strong>'.$row.'</strong></h2>';
               ?>
  

    </div>
</div>


  <div class="row">
    <div class="col-sm divbg m-2">
    <?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM attendance_in ORDER BY id DESC LIMIT 7");
?>
    <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <table class="table m-3">

        <tr>
        <th>Student Name</th><th>Strand</th><th>Section</th><th>Status</th>
        </tr>
        <?php
        while($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td><img src='../studentl/$user_data[pp]' width ='30px' height='30px' style='border-radius: 50%;'> $user_data[fname] $user_data[lname] </td>";
            echo "<td>".$user_data['strand']."</td>";
            echo "<td>".$user_data['section']."</td>";
            echo "<td class='greentext'>Time In</td>";

            
    
        }
        ?>
        </table>
    </div>


    <div class="col-sm divbg m-2">
    <?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM attendance_out ORDER BY id DESC LIMIT 7");
?>
    <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
        <table class="table m-3">

        <tr>
        <th>Student Name</th><th>Strand</th><th>Section</th><th>Status</th>
        </tr>
        <?php
        while($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td><img src='../studentl/$user_data[pp]' width ='30px' height='30px' style='border-radius: 50%;'> $user_data[fname] $user_data[lname] </td>";
            echo "<td>".$user_data['strand']."</td>";
            echo "<td>".$user_data['section']."</td>";
            echo "<td class='redtext'>Time Out</td>";

            
        }
        ?>
        </table>
    </div>
  </div>

</div>

             
     
          


</div>

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>