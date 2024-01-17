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


<?php

include 'config.php';
$ID = $_GET['id'];
$Record = mysqli_query($con,"SELECT * FROM `student` WHERE id=$ID");
$data = mysqli_fetch_array($Record);

?>
    


        <div class="main">
        <form action="update1.php" method="POST" enctype="multipart/form-data" >
            
        <label for="">RFID:</label>
        <input type="text" value="<?php echo $data['rfid_no'] ?>" name="rfid_no"><br>

        <label for="">First Name:</label>
        <input type="text" value="<?php echo $data['fname'] ?>" name="fname"><br>
        
        <label for="">Last Name:</label>
        <input type="text" value="<?php echo $data['lname'] ?>" name="lname"><br>

        <label>Strand</label>
					<?php
					include("../config.php");
					include("fetch-strand.php");
					?>

					<select name="strand">
					<option><?php echo $data['strand']?></option>
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

					<select name="section">
					<option><?php echo $data['section']?></option>
					<?php 
					foreach ($options as $option) {
					?>
						<option><?php echo $option['sectionname']; ?> </option>
						<?php 
						}
					?>
					</select>

        <label for="">Parent Name:</label>
        <input type="text" value="<?php echo $data['pname']?>" name="pname"><br>

        <label for="">Parent Number:</label>
        <input type="text" value="<?php echo $data['pnum'] ?>" name="pnum"><br>

        <label for="">Address:</label>
        <input type="text" value="<?php echo $data['address'] ?>" name="address"><br>




        <label for="">Image:</label>
        <input type="file" name="image" value="<?php echo $data['pp'] ?>">
        <img src="<?php echo $data['pp'] ?>"  width = '200px'  height = '200px' alt="">
            <input type="hidden" name="id"  value="<?php echo $data['id'] ?>">
        <button type="submit" name="update" class = 'btn btn-danger m-2'>Update</button>

        </form>
    </div>
      

       

    </body>    
</html>