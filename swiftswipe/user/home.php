<?php

include '../config.php';
session_start();
$id = $_SESSION['id'];

if(!isset($id)){
  header('location:../index.php');
};

if(isset($_GET['logout'])){
   unset($id);
   session_destroy();
   header('location:../index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="../logo/logosystem.png"> 
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="user.css">
  <link rel="stylesheet" href="user1.css">
  <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <title>Home</title>
   </head>
   <header>
            <a class="logo" href="home.php"><img src="../logo/logo.png" height="45px" alt="logo"></a>
            <nav >
                <ul class="nav__links">
                    <li><a href="home.php"  class="active">Home</a></li>
                    <li><a href="daily.php">Daily Attendance</a></li>
                    <li><a href="month.php">Monthly Report</a></li>
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
                <a href="home.php" class="active">Home</a>
                <a href="daily.php">Daily Attendance</a>
                <a href="monthly.php">Monthly Report</a>
                <a href="update_profile.php">Profile</a>
                <a href="home.php?logout=<?php echo $id; ?>">Logout</a>
            </div>
        </div>
        <script type="text/javascript" src="mobile.js"></script>


  <body style="background: linear-gradient(#ffffff,var(--blue));     height: 100%;
    margin: 0;
    background-repeat: no-repeat;
    background-attachment: fixed;">  

       
   
    

  <div class="row m-5">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                <div class="card-header">List Student of <?php echo $fetch['department']; ?>
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">Student Number</th>
                                                <th>Name</th>
                                                <th class="text-center">Grade</th>
                                                <th class="text-center">Strand</th>
                                                <th class="text-center">Section</th>
                                            </tr>
                                            </thead>

                                            <tr>
                                            <?php
                                        
                                                        // Create database connection using config file
                                                        include_once("../config.php");
                                                     
                                                        // Fetch all users data from database
                                                        $result = mysqli_query($conn, "SELECT * FROM student WHERE strand='$fetch[department]' ORDER BY section ");
                                                        ?>  


                                                        <?php
                                                    while($user_data = mysqli_fetch_array($result)) {


                                            echo"<tbody>";
                                            echo"<tr>";
                                                        echo "<td class='text-center text-muted'>$user_data[student_no]</td>";
                                                        echo "<td>";
                                                        echo "<div class='widget-content p-0'>";
                                                        echo "<div class='widget-content-wrapper'>";
                                                        echo "<div class='widget-content-left mr-3'>";
                                                        echo "<div class='widget-content-left'>";
                                                        if($user_data['pp'] == ''){
                                                            echo '<img width="40" style="border-radius:50%;" src="../images/default-avatar.png">';
                                                        }else{
                                                            echo '<img width="40" style="border-radius:50%;" src="../uploaded_img/'.$user_data['pp'].'">';
                                                        }
                                                        echo "</div>";
                                                        echo "</div>";
                                                        echo "<div class='widget-content-left'>";
                                                        echo "<div class='widget-heading'>$user_data[fname] $user_data[lname]</div>";
                                                        echo "</div>";
                                                        echo "</div>";
                                                        echo "</div>";
                                                        echo "</td>";
                                                        echo "<td class='text-center'>$user_data[grade]</td>";
                                                        echo "<td class='text-center'>$user_data[strand]</td>";
                                                        echo "<td class='text-center'>$user_data[section]</td>";
                                                        echo "</tr>";
                                                        echo "</tr>";
                                                        echo "</tbody>";

                                        }

                                        ?>       

                                        </table>

                                    </div>
                                    <div class="d-block text-center card-footer">

                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>


</body>
</html>