
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
        $student_no = $row['student_no'];
        $grade = $row['grade'];
        $pname = $row['pname'];
        $pnum = $row['pnum'];
        $pp = $row['pp'];
        $logTime = date("H:i:s");

        if($count == 1){  

            if (empty($pnum)) {
                $sql = "INSERT INTO `attendance_out`(`id`,`pp`,`student_no`,`grade`,`fname`,`lname`,`section`,`strand`,`logTime`,`rfid_no`) VALUES (NULL,'$pp','$student_no','$grade','$fname','$lname','$section','$strand', null,'$username')";
                $result = mysqli_query($conn, $sql);
              } else{
                // Required if your environment does not handle autoloading
                require '..\twilio-php-main\twilio-php-main\src\Twilio\autoload.php';

                // Your Account SID and Auth Token from console.twilio.com
                $sid = "ACd886e64794e6031c325358835cd921f2";
                $token = "c81cc6a4e5ab42ccb31dacc2e3cdaf52";
                $client = new Twilio\Rest\Client($sid, $token);

                // Use the Client to make requests to the Twilio REST API
                $client->messages->create(
                    // The number you'd like to send the message to
                    "+63$pnum",
                    [
                        // A Twilio phone number you purchased at https://console.twilio.com
                        'from' => '+18045771224',
                        // The body of the text message you'd like to send
                        'body' => "Hello $pname! $fname $lname has exit the school premises at $logTime."

                    ]
                );
                $sql = "INSERT INTO `attendance_out`(`id`,`pp`,`student_no`,`grade`,`fname`,`lname`,`section`,`strand`,`logTime`,`rfid_no`) VALUES (NULL,'$pp','$student_no','$grade','$fname','$lname','$section','$strand', null,'$username')";
                $result = mysqli_query($conn, $sql);

              }



            header("Location: index.php?error=TIME OUT!");
            
        } else{  
            header("Location: failed.php");


        }   
?>  