<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
   
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <style>
  input{
    margin: 10px;
}
            </style>

</head>
<body>
        <center>
        <div class="main">
        <form action="insert.php" method="POST" enctype="multipart/form-data" >
        <label for="">RFID:</label>
        <input type="text" name="rfid_no" required><br>
        <label for="">First Name:</label>
        <input type="text" name="fname" required><br>
        <label for="">Last Name:</label>
        <input type="text" name="lname" required><br>

        <label>Strand</label>
					<?php
					include("../config.php");
					include("fetch-strand.php");
					?>

					<select name="strand">
					<option>Select Strand</option>
					<?php 
					foreach ($options as $option) {
					?>
						<option><?php echo $option['strandcode']; ?> </option>
						<?php 
						}
					?>
					</select>


				<label>Section</label>
					<?php
					include("../config.php");
					include("fetch-section.php");
					?>
					<select name="section"><br/>
					<option>Select Course</option>
					<?php 
					foreach ($options as $option) {
					?>
						<option><?php echo $option['sectionname']; ?> </option>
						<?php 
						}
					?>
					</select> <br>


        <label for="">Parent Name:</label>
        <input type="text" name="pname" required><br>
        <label for="">Parent Number :</label>
        <input type="text" name="pnum" id="" required><br>
        <label for="">Address :</label>
        <input type="textarea" name="address" id="" required><br>


        <label for="">Image:</label>
        <input type="file" name="image" id=""><br>
        <button type="submit" name="upload">Upload</button>

        </form>
        <body>
            </html>
