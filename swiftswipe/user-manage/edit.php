





<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];


	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET fname='$fname',lname='$lname',email='$email',password='$password' WHERE id=$id");

	// Redirect to homepage to display updated user in list
    header("Location: index.php?success=Edited Successfully");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$fname = $user_data['fname'];
	$lname = $user_data['lname'];
	$email = $user_data['email'];
	$password = $user_data['password'];

}
?>
<html>
<head>
	<title>Edit User</title>
</head>

<body>
	<a href="index.php">Cancel</a>
	<br/><br/>

	<form  method="post" action="edit.php">

		
				<input type="text" name="fname" value=<?php echo $fname;?>>
	
				<input type="text" name="lname" value=<?php echo $lname;?>>

					
				<input type="email" name="email" value=<?php echo $email;?>>

					
				<input type="text" name="password" value=<?php echo $password;?>>
	
				<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>