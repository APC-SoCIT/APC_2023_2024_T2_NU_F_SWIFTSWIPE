<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM strand ORDER BY id DESC");
?>

<html>
<head>
<link rel="icon" type="image/x-icon" href="../image/logo.png">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" type="text/css" href="../sidebar-admin/sidebar.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>Strand List</title>
</head>

<body>

<nav class="navbar fixed-top " style="background-color: white;">
  <div class="container-fluid">
    <div class="navbar-brand">
      <img
        src="../image/logo.png"
        class="me-2"
        height="50"
        alt="nu logo"
        loading="lazy"
      />
      <large>Swiftswipe Admin</large>
</div>
  </div>
</nav>

<div class="sidebar">
<a  href="../admin/home.php">Dashboard</a>
  <a href="../attendance-in/index.php">Time In</a>
     <a href="../attendance-out/index.php">Time Out</a>
     <a class="active" href="../strand/index.php">Strands</a>
     <a href="../section/index.php">Sections</a>
     <a href="../studentl/index.php">Students</a>
     <a href="../user-manage/index.php">Users</a>
     <a  href="../admin/logout.php">Logout</a>
</div>

<div class="content">


        <a href="add.php">Add New Strand</a><br/><br/>


        <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>

        <?php } ?>

    <table class="table">

    <tr>
       <th>Strand Code</th> <th>Strand Name</th><th>Action</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['strandcode']."</td>";
        echo "<td>".$user_data['strandname']."</td>";
        echo "<td>
        <a href='edit.php?id=$user_data[id]'><i class='fa-solid fa-pen-to-square fa-xl' style='color: #b0fc74;'></i></a>  | <a href='delete.php?id=$user_data[id]'><i class='fa-solid fa-trash fa-lg' style='color: #fb7878;'></i></a>";
    }
    ?>
    </table>


   

</div>


</body>
</html>