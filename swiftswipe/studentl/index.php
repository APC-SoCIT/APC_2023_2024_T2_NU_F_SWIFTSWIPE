<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../sidebar-admin/sidebar.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


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
     <a href="../strand/index.php">Strands</a>
     <a href="../section/index.php">Sections</a>
     <a class="active" href="../studentl/index.php">Students</a>
     <a href="../user-manage/index.php">Users</a>
     <a href="logout.php">Logout</a>
</div>

<div class="content">


<a href="add.php">Add New Student</a>
        <table class="table">

    <tr>
    <th >Name</th>
      <th>RFID</th>
      <th >Strand</th>
      <th >Section</th>
      <th>Action</th>
      
     
      
      
      
      
    </tr>

     
        <?php
        include 'config.php';
        $pic = mysqli_query($con,"SELECT * FROM `student`");
        while($row = mysqli_fetch_array($pic)){
        echo "
            <tr>
                <td><img src='$row[pp]'  width = '40px'  height = '40px' style='border-radius: 50%;'> $row[fname] $row[lname]</td>
                <td>$row[rfid_no]</td>
                <td>$row[strand]</td>
                <td>$row[section]</td>
                <td><a href='update.php? id= $row[id]'>Update</a> <a href='delete.php? id=$row[id]' '>Delete</a></td>
  
            
                
                
            </tr>
            ";
        }
        
        ?>

</div>





 
</div>
</body>
</html>