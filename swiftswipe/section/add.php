<html>
<head>
	<title>Add Section</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<a href="index.php">Cancel</a>
	<br/><br/>


	<div class="d-flex justify-content-center align-items-center divbg">
	<form action="add.php" method="post" name="form1">
				<label>Section Name</label>
				<input type="text" name="section">
				<input type="submit" name="Submit" value="Add">
	</form>

	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$section = $_POST['section'];


		// include database connection file
		include_once("config.php");

		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO section(sectionname) VALUES('$section')");

		header("Location: index.php?success=Added Successfully");
	}
	?>
</body>
</html>