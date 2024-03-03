<html>
<head>
	<title>Add Section</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
	<link rel="stylesheet" href="section1.css">
	<link rel="icon" href="../logo/logosystem.png">

</head>

<body>





<div class="form-container">

	<form action="add.php" method="post" name="form1">

	<h1>Add New Section</h1>


				<input type="text" class="box" name="section" placeholder="Enter Section Name" required>
				
				<?php
					include("../config.php");
					include("fetch-strand.php");
					?>

					<select name="strand"  class="box" style="color:#7f828b;">
					<option>Select Strand</option>
					<?php 
					foreach ($options as $option) {
					?>
						<option><?php echo $option['strandcode']; ?> </option>
						<?php 
						}
					?>
					</select>

				<button type="submit" name="Submit" class ="btn">Save</button>
				<a href="index.php" class="delete-btn">Cancel</a>
	</form>
	</div>

	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$section = $_POST['section'];
		$strand = $_POST['strand'];

		// include database connection file
		include_once("config.php");

		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO section (`sectionname`,`strand`) VALUES ('$section','$strand')");

		header("Location: index.php?success=Added Successfully");
	}
	?>

</body>
</html>