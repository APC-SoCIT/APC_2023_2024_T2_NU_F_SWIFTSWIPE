

<html>  
<head>  
    <title>Time Out</title> 
    <link rel="icon" type="image/x-icon" href="../logo/logosystem.png"> 
    <link rel="stylesheet" href="timeout1.css">
   
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>  

<?php 
include('../config.php');  


$sql = "SELECT * FROM attendance_out ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);


?>
<style>
.hiddeninput{
    opacity: 0;
}

.hiddeninput{
    position: absolute;
    top:0;
    left:0;
}
    
</style>


<body>  



        <form  name="f1" action = "../time-out/auth.php" method = "POST">  
                <input autocomplete="off" class="hiddeninput" type = "text" id ="user" name="user">  
        </form>  

    </div>  

    <div  class="d-flex min-vh-100 justify-content-center align-items-center">
    <div  style="background-color:#ffffff; border-radius:10px; box-shadow: 0px 10px 46px -7px rgba(0,0,0,0.64);
-webkit-box-shadow: 0px 10px 46px -7px rgba(0,0,0,0.64);
-moz-box-shadow: 0px 10px 46px -7px rgba(0,0,0,0.64);">
        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {


        ?>




                   <div class="bg">
                <div class="container">
                    <div class="user-image">
                    <img class="img" src=../uploaded_img/<?php echo $row['pp']?>>
                    </div>
            
                    <div class="content">
                        <h3 class="name"><?php echo $row['fname']," ", $row['lname']; ?></h3>
                        <p class="username"><?php echo $row['grade']; ?></p>
            
            
            
                        <p class="details">
                        <?php echo $row['strand']; ?>
                        </p>
            
                        <p class="details">
                        <?php echo $row['logTime']; ?>
                        </p>
                   
                        <?php if (isset($_GET['error'])) { ?>
                <p class="effect effect-4"><?php echo $_GET['error']; ?></p>
                <?php } ?>
         
                    
                    </div>
                </div>
                </div>

        <?php       } 

            }

        ?>          


	      
	    </tbody>
	  </table>
      </div>
        </div>

        	

<script>
    
$(document).ready(function(){


$('#user').focus();
$('body').mousemove(function(){
    $('#user').focus();
});

$('#user').keyup(function(){
 if($(this).val(). length >= 10){

    if($(this).val() == rfidcard){
        $("rfidcard").show();
        $("name").show();
        $("strand").show();
        $("grade").show();
        $("time").show();
        
    }



 } 

});
});

</script>



</body>     
</html>  