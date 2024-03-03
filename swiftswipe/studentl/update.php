<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="../image/slogo1.png"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="icon" href="../logo/logosystem.png">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" type="text/css" href="student1.css">

</head>
<body>

   
<div class="update-profile">




<form action="update1.php" method="POST" enctype="multipart/form-data" >

<?php

include '../config.php';
$ID = $_GET['id'];
$Record = mysqli_query($conn,"SELECT * FROM `student` WHERE id=$ID");
$data = mysqli_fetch_array($Record);

?>
  <input type="hidden" name="id"  value="<?php echo $data['id'] ?>">

        <?php
         if($data['pp'] == ''){
            echo '<img src="../images/default-avatar.png">';
         }else{
            echo '<img src="../uploaded_img/'.$data['pp'].'">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
    <div>
      <span>Update Photo:</span>
      <input type="file" class="input1" accept="image/jpg, image/jpeg, image/png" name="update_image">
      </div>

        <div class="flex">
        <div class="inputBox">

        <span>RFID:</span>
        <input type="text" class="box" value="<?php echo $data['rfid_no'] ?>" name="rfid_no">
    
        <span>First Name:</span>
        <input type="text" class="box"value="<?php echo $data['fname'] ?>" name="fname">
  

        <span>Strand:</span>
					<?php
					include("../config.php");
					include("fetch-strand.php");
					?>
					<select name="strand"  class="box">
					<option><?php echo $data['strand']?></option>
					<?php 
					foreach ($options as $option) {
					?>
						<option><?php echo $option['strandcode']; ?> </option>
						<?php 
						}
					?>

					</select>

                    <span>Grade:</span>
					<select name="grade"  class="box">
					<option><?php echo $data['grade']?></option>

	
                    <option>Grade 12</option>
					</select>

                    <span>Parent Name:</span>
        <input type="text" class="box" value="<?php echo $data['pname']?>" name="pname">
            </div>

         <div class="inputBox">

         <span>Student Number:</span>
         <input type="text" class="box"value="<?php echo $data['student_no'] ?>" 
         name="student_no">

         <span>Last Name:</span>
         <input type="text" class="box"value="<?php echo $data['lname'] ?>" 
         name="lname">



  
                    <span>Section:</span>
					<?php
					include("../config.php");
					include("fetch-section.php");
					?>

					<select name="section"class="box">
					<option><?php echo $data['section']?></option>
					<?php 
					foreach ($options as $option) {
					?>
						<option ><?php echo $option['sectionname']; ?> </option>
						<?php 
						}
					?>
					</select>
        




 

        <span>Parent Number:</span>

        <div style="display: flex; align-items:center;">
        <p style="margin-right:5px; width: 20%;" class="box" style="color:#7f828b" >+63</p> <input type="text" value="<?php echo $data['pnum'] ?>" class="box" name="pnum" id="" maxlength="10" onkeypress="return event.charCode>=48 && event.charCode<=57">
		</div>

        <span>Address:</span>
        <input type="text" class="box" value="<?php echo $data['address'] ?>" name="address">

      
        
        </div>
        </div>
        <button type="submit" name="update" class ="btn">Save</button>
        <a href="index.php" class="delete-btn">Cancel</a>
        </form>
    
   
        </div>
    </body>    
</html>