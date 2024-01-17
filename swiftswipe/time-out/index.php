

<html>  
<head>  
    <title>TIME OUT</title>  
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../input.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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


<body class="bg">  

<form name="f1" action = "../time-out/auth.php" method = "POST">  
                <input autocomplete="false" class="hiddeninput" type = "text" id ="user" name="user" />  
        </form>  

    </div>  

    <div class="d-flex min-vh-100 justify-content-center align-items-center">
    <div class="divcolorwhite p-3">
        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {


        ?>

                <div class="d-flex flex-column mb-3">

                <div class="p-2">
                <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                </div>


                <div class="p-2">

                <div class="d-flex flex-row  mb-3">

                <img src=../studentl/<?php echo $row['pp']?> width='355px' height ='355px'>

                <div class="d-flex flex-column mb-3">
                <div class="m-3">
                <p class="uppercase" id="rfidcard">NAME: <?php echo $row['fname']," ", $row['lname']; ?></p>
                </div>
                <div class="m-3">
                <p class="uppercase" id="name">Strand: <?php echo $row['strand']; ?></p>
                </div>
                <div class="m-3">
                <p class="uppercase" id="strand">SECTION: <?php echo $row['section']; ?></p>
                </div>
                <div class="m-3">
                <p class="uppercase" id="section">DATE/TIME: <?php echo $row['logTime']; ?></p>
                </div>
                </div>
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
        $("section").show();
        $("time").show();
        
    }



 } 

});
});

</script>
</body>     
</html>  