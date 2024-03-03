<?php
// Headers for download
$currentDate = date("Y-m-d");
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; Filename=Student_Monthly_Attendance $currentDate.xls");
require '../config.php';

$currentDate = date("m");
$filtervalues = isset($_GET['c']) ? $_GET['c'] : '';
$query = "SELECT * FROM attendance_in WHERE logTime >= '$currentDate' AND CONCAT(student_no) LIKE '%$filtervalues%' ";
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