

<?php      
    include('../config.php');  
        $username = $_POST['user'];  
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $username = mysqli_real_escape_string($conn, $username);  
      
        $sql = "select *from student where rfid_no = '$username'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        $fname = $row['fname'];
        $lname = $row['lname'];
        $section = $row['section'];
        $strand = $row['strand'];
        $pp = $row['pp'];


        if($count == 1){  


            $sql = "INSERT INTO `attendance_in`(`id`,`pp`, `fname`, `lname`,`section`, `strand`, `logTime`, `rfid_no`) VALUES (NULL,'$pp','$fname','$lname','$section','$strand', null,'$username')";
            $result = mysqli_query($conn, $sql);

            header("Location: index.php?success=TIME IN!");
            
        } else{  
            header("Location: failed.php");


        }   
?>  