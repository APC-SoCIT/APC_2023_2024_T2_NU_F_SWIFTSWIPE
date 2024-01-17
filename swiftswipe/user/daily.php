<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>Daily Attendance</title>
</head>
<body>


<form action="data.php" method="GET">

<input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" placeholder="Search Strand">
<button type="submit">Search</button>
</div>
</form>





</body>
</html>