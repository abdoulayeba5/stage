<?php

require_once "conn.php";

require "email.php";

require "send.php";
session_start();
if(isset($_POST["verify_button"])){
    $code = $_POST["sent_code"];
    $email = $_SESSION["email"];
    
    $query = "SELECT * from users where email = $email and code= $code";
    
    $query = "SELECT * from users where code = '$code' and email = '$email';";
    $res = mysqli_query($conn, $query);

    if(mysqli_num_rows ($res) > 0){
        echo "<script>
        alert('le code est bien correct ');
        document.location.href ='new_password.php' ;
        </script>";
    
    
    }
    else{
        echo "<script>
        alert('le code est nest pas correct ');
        document.location.href ='index.html' ;
        </script>";
    }
   



    
   
    
}

?>