
<?php
require 'config.php';
// Headers for download
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; Filename = Data.xls");
?>

<table>
<thead>
<tr>
<th>Name</th>
<th>Strand</th>
<th>Section</th>
</tr>
</thead>
<tbody>
<?php 
$con = mysqli_connect("localhost","root","","swiftswipe_db");

if(isset($_GET['search']))
{
$currentDate = date("Y-m-d");
$filtervalues = $_GET['search'];
$query = "SELECT * FROM attendance_in WHERE logTime >= '$currentDate' AND CONCAT(section) LIKE '%$filtervalues%' ";
$query_run = mysqli_query($con, $query);

if(mysqli_num_rows($query_run) > 0)
{
foreach($query_run as $items)
{
?>
<tr>
<td><?= $items['fname']," ",$items['fname']; ?></td>
<td><?= $items['strand']; ?></td>
<td><?= $items['section']; ?></td>
</tr>
<?php
}

}
else
{
?>
<tr>
<td colspan="4">No Record Found</td>
</tr>
<?php
}
}
?>
</tbody>
