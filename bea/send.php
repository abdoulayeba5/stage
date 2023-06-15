<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "conn.php";
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

session_start();
if(isset($_POST["send_button"])){
    
    $email = $_POST["forgoten_email"];

    
    

    $_SESSION['email'] = $email;


    $query = "SELECT * from users where email = '$email';";
    $res = mysqli_query($conn, $query);

    if(mysqli_num_rows ($res) > 0){


        $email = $_POST["forgoten_email"];
        $code = rand(999999, 111111);

        $query = "UPDATE users set code = '$code' where email = '$email';";

        $res = mysqli_query($conn, $query);
        $_SESSION['code'] = $code;

        
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = '21043@supnum.mr';
        $mail->Password = 'ryrhqnfcznbkfere';
        $mail->SMTPSecure = 'ssl';
        $mail->Port= 465;
        $mail->setFrom('21043@supnum.mr') ;
        $mail->addAddress($email);
        $mail->isHTML(true);

        $mail->Subject = $_POST["sujet"];
        $mail->Body = "votre code est $code";
        
        $mail->send();
        echo "<script>
        alert('le message est envoyée avec succée ');
        document.location.href ='password.php' ;
        </script>";
    }
    else{
        echo "<script>
        alert('vous etes pas inscrit ');
        document.location.href ='index.html' ;
        </script>";
    }
    
    
}

?>