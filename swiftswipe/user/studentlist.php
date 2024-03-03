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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>

<table>

<tr>
<th>Student Name</th><th>Student Code</th><th>Strand</th><th>Section</th>
</tr>
<?php

include_once("../config.php");

// Fetch all users data from database
$result = mysqli_query($conn, "SELECT * FROM student");

while($user_data = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td><img src='../studentl/$user_data[pp]' width ='40px' height='40px' style='border-radius: 50%;'> $user_data[fname] $user_data[lname] </td>";
    echo "<td>".$user_data['rfid_no']."</td>";
    echo "<td>".$user_data['strand']."</td>";
    echo "<td>".$user_data['section']."</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>