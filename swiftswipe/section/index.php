


<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM section ORDER BY id DESC");
?>

<html>
<head>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" type="text/css" href="../sidebar-admin/sidebar.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
<title>Section List</title>
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
     <a class="active" href="../section/index.php">Sections</a>
     <a href="../studentl/index.php">Students</a>
     <a href="../user-manage/index.php">Users</a>
     <a  href="../admin/logout.php">Logout</a>
</div>

<div class="content">

<a href="add.php">Add New Section</a><br/><br/>

<?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>

        <?php } ?>

    <table class="table">

    <tr>
        <th>Section Name</th><th>Action</th>

    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['sectionname']."</td>";
        echo "<td>
        <a href='edit.php?id=$user_data[id]'><i class='fa-solid fa-pen-to-square fa-xl' style='color: #b0fc74;'></i></a>  | <a href='delete.php?id=$user_data[id]'><i class='fa-solid fa-trash fa-lg' style='color: #fb7878;'></i></a>
        </td></tr>";
    }
    ?>
    </table>


</div>


</body>
</html>