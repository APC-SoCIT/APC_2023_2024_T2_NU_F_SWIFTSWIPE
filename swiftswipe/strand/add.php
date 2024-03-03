<html>
<head>
	<title>Add Strand</title>
	<link rel="icon" href="../logo/logosystem.png">


	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
	<link rel="stylesheet" href="strand1.css">






<body>



<div class="form-container">
	<form action="add.php" method="post" name="form1">
	<h3>Add New Strand</h3>
				<input type="text" class="box" name="strandcode" placeholder="Enter Strand Code" required>
	
				<input type="text" class="box" name="strandname"  placeholder="Enter Strand Name" required>
	
				<button type="submit" name="Submit" class ="btn">Save</button>
				<a href="index.php" class="delete-btn">Cancel</a>

	</form>
	</div>
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$strandname = $_POST['strandname'];
		$strandcode = $_POST['strandcode'];

		// include database connection file
		include_once("config.php");

		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO strand(strandcode,strandname) VALUES('$strandcode','$strandname')");

		header("Location: index.php?success=Added Successfully");
	}
	?>
</body>
</html>