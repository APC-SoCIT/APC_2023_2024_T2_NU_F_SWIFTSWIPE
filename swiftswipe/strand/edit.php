<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];

	$strandcode=$_POST['strandcode'];
	$strandname=$_POST['strandname'];


	// update user data
	$result = mysqli_query($mysqli, "UPDATE strand SET strandcode='$strandcode',strandname='$strandname' WHERE id=$id");

	// Redirect to homepage to display updated user in list
    header("Location: index.php?error=Edited Successfully");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM strand WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$strandcode = $user_data['strandcode'];
	$strandname = $user_data['strandname'];

}
?>
<html>
<head>
<link rel="stylesheet" href="../style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="icon" type="image/x-icon" href="../image/logo.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Edit Strand</title>
</head>

<body>

	<div class="d-flex min-vh-100 justify-content-center align-items-center">

	<form name="update_user" method="post" action="edit.php">
	<a href="index.php"><i class="fa-solid fa-x" style="color: #fb8787;"></i></a>
	<h2 class="text-center textblue">UPDATE STRAND</h2>
	<div class="d-flex flex-column bd-highlight mb-3">  
	<div class="p-2 bd-highlight"> 
	<label>Strand Code</label>
				<input class="inputtext2" type="text" name="strandcode" value=<?php echo $strandcode;?>>
				</div>
				<div class="p-2 bd-highlight"> 
				<label>Strand Name</label>
				<input class="inputtext2"type="text" name="strandname" value=<?php echo $strandname;?>>
				</div>


				<div class="p-2 bd-highlight"> 
				<button type="submit" class="yellowbutton" name="update" value="Update">Update</button>
				</div>
				<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
	</form>
	</div>
</body>
</html>