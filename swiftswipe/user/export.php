<?php
require '../config.php';

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

$currentDate = date("Y-m-d");
$select = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$id'") or die('query failed');
if(mysqli_num_rows($select) > 0){
   $fetch = mysqli_fetch_assoc($select);
}

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; Filename=$fetch[department]_Daily_Attendance $currentDate.xls");





$currentDate = date("Y-m-d");
$filtervalues = isset($_GET['c']) ? $_GET['c'] : '';
$query = "SELECT * FROM attendance_in WHERE logTime >= '$currentDate' AND CONCAT(section) LIKE '%$filtervalues%' ";
$query_run = mysqli_query($conn, $query);

if (mysqli_num_rows($query_run) > 0) {
    ?>
    <table>
    <thead>
    <tr>
    <th>Name</th>
    <th>Grade</th>
    <th>Strand</th>
    <th>Section</th>
    <th>Date/Time</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($items = mysqli_fetch_assoc($query_run)) {
        ?>
        <tr>  
        <td><?= $items['fname'] . " " . $items['lname']; ?></td>
        <td><?= $items['grade']; ?></td>
        <td><?= $items['strand']; ?></td>
        <td><?= $items['section']; ?></td>
        <td><?= $items['logTime']; ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
    </table>
    <?php
} else {
    ?>
    <p>No Record Found</p>
    <?php
}
?>