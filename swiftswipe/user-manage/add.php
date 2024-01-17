<html>
<head>
	<title>Add User</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

	<form action="add.php" method="post" name="form1">

				<label>First Name</label>
				<input type="text" name="fname" required>

				<label>Last Name</label>
				<input type="text" name="lname" required>

				<label>Email</label>
				<input type="email" name="email" required>

				<label>Password</label>
				<input type="text" name="password" required>




				<button class="add"type="submit" name="Submit" value="Add">Add</button>
				<a class="cancel" href="index.php">Cancel</a>
	</form>

	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		// include database connection file
		include_once("config.php");

		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users (fname,lname,email,password) VALUES('$fname','$lname','$email','$password')");

		header("Location: index.php?success=Added Successfully");
	}
	?>
</body>
</html>