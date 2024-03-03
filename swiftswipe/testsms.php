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
                'body' => "Hello $pname! $fname $lname has entered the school premises at $currentDateTime."

            ]
        );