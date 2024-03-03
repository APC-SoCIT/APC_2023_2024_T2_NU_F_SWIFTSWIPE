<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" href="../logo/logosystem.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Add Student</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="student1.css">


</head>
<body>
   
<div class="update-profile">

        <form action="insert.php" method="POST" enctype="multipart/form-data" >
     
         
        <h1>Add New Student</h1>

		<div>
		<span>Student Picture:</span>
		<input type="file" class="input1"name="image" id="">
		</div>

		<div class="flex">
		<div class="inputBox">
		<span>First Name:</span>
		<input type="text"class="box"  name="fname" required placeholder="Enter First Name">



		<span>RFID:</span>
        <input type="text" class="box" name="rfid_no" required placeholder="Enter RFID" onkeypress="return event.charCode>=48 && event.charCode<=57">

		<span>Grade:</span>
					<select name="grade" class="box" style="color:#7f828b">
					<option>Select Grade</option>		
					<option>Grade 11</option>
            		<option>Grade 12</option>
					</select> 
           
					<?php
					include("../config.php");
					include("fetch-section.php");
					?>

					<span>Section:</span>
					<select name="section" class="box" style="color:#7f828b">
					<option>Select Section</option>
					<?php 
					foreach ($options as $option) {
					?>
						<option><?php echo $option['sectionname']; ?> </option>
						<?php 
						}
					?>
					</select>
					<span>Parent/Guardian Phone Number:</span>
					<div style="display: flex; align-items:center;">
        <p style="margin-right:5px; width: 20%;" class="box" style="color:#7f828b" >+63</p> <input style="color:#7f828b"type="text" placeholder="Phone Number" class="box" name="pnum" id="" maxlength="10" required onkeypress="return event.charCode>=48 && event.charCode<=57">
		</div>
		</div>
		<div class="inputBox">


		
		<span>Last Name:</span>
        <input type="text" class="box"  name="lname" required placeholder="Enter Last Name Name">
		<span>Student Number:</span>
		<input type="text" class="box" name="student_no" required placeholder="Enter Student Number">
		<span>Strand:</span>
					<?php
					include("../config.php");
					include("fetch-strand.php");
					?>

					<select name="strand" class="box" style="color:#7f828b;">
					<option>Select Strand</option>
					<?php 
					foreach ($options as $option) {
					?>
						<option><?php echo $option['strandcode']; ?> </option>
						<?php 
						}
					?>
					</select>
           
                    

           


					<span>Parent/Guardian Full Name:</span>
        <input type="text" class="box"  name="pname" required placeholder="Enter Full Name">


		<span>Address:</span>
        <input  type="text" class="box"  name="address" id="" required placeholder="Enter Address">
		</div>
	</div>
        <button type="submit" name="upload" class ="btn">Add</button>
        <a href="index.php" class="delete-btn">Cancel</a>
        </form>
        </div>
          

      

                 
        <body>
            </html>
