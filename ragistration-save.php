<?php

// mail start
use PHPMailer\PHPMailer\PHPMailer; 

use PHPMailer\PHPMailer\Exception;

require('config.php'); // database connectin kora holo.

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$location = 'userconfrim.php?msg=Success';
$query = "INSERT INTO user (name, email, password, code,status)
          VALUES ('$name', '$email', '$password', '$verifi_code','pending')";
$dbOparetion = new dbOparetion();
$dbOparetion -> insertDB($conn, $query, $location);
$verifi_code = rand(1000,100000);
  

        require 'PHPMailer/src/Exception.php';

        require 'PHPMailer/src/PHPMailer.php';

        require 'PHPMailer/src/SMTP.php';

        // create object of PHPMailer class with boolean parameter which sets/unsets exception.

        $mail = new PHPMailer(true);                              

        try {

            $mail->isSMTP(); // using SMTP protocol                                     

            $mail->Host = 'sandbox.smtp.mailtrap.io'; // SMTP host as gmail 

            $mail->SMTPAuth = true;  // enable smtp authentication                             

            //$mail->Username = 'jannat.mamurjor@gmail.com';  // sender gmail host              
            $mail->Username = 'f12446a5ff5f24';  // sender gmail host              
         
            //$mail->Password = 'ihztsijwheggbfmy'; // sender gmail host password   
            $mail->Password = 'a1039599f646b8'; // sender gmail host password   
           
            $mail->SMTPSecure = 'tls';  // for encrypted connection                           

            $mail->Port = 2525;   // port for SMTP     

            $mail->isHTML(true); 

            $mail->setFrom('rmdhabibur621@gmail.com', "Sender"); // sender's email and name

            $mail->addAddress($email, "HADIJAMAN");  // receiver's email and name

            $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

            $mail->Subject = 'Email verification From Habib';
          
              $mail->Body = $verifi_code; 

            $mail->send();

        }
        catch (Exception $e) { // handle error.

            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

        }


// mail end

if(isset($_POST['remember'])){
  setcookie('name', $name, time() + 3600);
  setcookie('email', $email, time() + 3600);
}
else{
  setcookie('remember', $remember, time() - 3600);
}





?>