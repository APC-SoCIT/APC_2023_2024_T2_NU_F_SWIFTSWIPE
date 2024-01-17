<html>
<head>
	<title>Add Strand</title>
	<link rel="stylesheet" href="../style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="icon" type="image/x-icon" href="../image/logo.png">
</head>

<body>
<div class="d-flex min-vh-100 justify-content-center align-items-center">
	<form action="add.php" method="post" name="form1">
	<div class="d-flex flex-column bd-highlight mb-3">  
	<div class="p-2 bd-highlight"> 
	<a href="index.php"><i class="fa-solid fa-x fa-xl" style="color: #fb8787;"></i></a>
	</div>
	<div class="p-2 bd-highlight"> 
	<h2 class="text-center textblue">ADD STRAND</h2>
	</div>

				<div class="p-2 bd-highlight"> 
				<label>Strand Code</label>
				<input type="text" class="inputtext2" name="strandcode" placeholder="Enter Strand Code">
				</div>
				<div class="p-2 bd-highlight">
				<label>Strand Name</label>
				<input type="text" class="inputtext2" name="strandname"  placeholder="Enter Strand Name" required>
				</div>
			    <div class="p-2 bd-highlight">
				<button class="greenbutton" type="submit" name="Submit" value="Add">Add</button>
				</div>
				</div>

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