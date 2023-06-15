<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "conn.php";
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $code = rand(999999, 111111);
    $email = $_POST["forgoten_email"];
    $query  = "UPDATE users set code = $code where email = $email;";
    $res = mysqli_query($con, $query);



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

    $mail->Subject = "Reset Password";
    $mail->Body = "votre code est $code";
    $mail->addAddress($email);
    $mail->send();
    echo "<script>
    alert('le message est envoyée avec succée ');
    document.location.href ='password.php' ;
    </script>";
    
}

?>