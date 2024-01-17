<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>
<link rel="stylesheet" href="../style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../sidebar-admin/sidebar.css">
<title>User List</title>
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
<a href="../admin/home.php">Dashboard</a>
  <a href="../attendance-in/index.php">Time In</a>
     <a href="../attendance-out/index.php">Time Out</a>
     <a href="../strand/index.php">Strands</a>
     <a href="../section/index.php">Sections</a>
     <a href="../studentl/index.php">Students</a>
     <a class="active" href="../user-manage/index.php">Users</a>
     <a  href="../admin/logout.php">Logout</a>
</div>

<div class="content">





        <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        
        <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>

        <?php } ?>

        <a href="add.php">Add New User</a>
    <table class="table">

    <tr>
  <th>Name</th><th>Email</th><th>Password</th><th>Action</th>

    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {

        echo "<td>".$user_data['fname']," ", $user_data['lname']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['password']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>

</div>




</body>
</html>