<?php

require "email.php";
require_once "conn.php";
require "send.php";
if(isset($_POST["new_p_button"])){
    
    $email = $_SESSION["email"];
    
    $password = $_POST["new_password"];
    $query = "UPDATE users set mot_de_passe = '$password' where email = '$email';";
    
    
    $res = mysqli_query($conn, $query);

    if($res){
        $query = "SELECT * from users where email ='$email';";
        $res = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($res);
        if($row['types'] == "admin"){
            echo "<script>
            alert('le password est bien changée');
            document.location.href ='admin/administrateur.php' ;
            </script>";
        }
        else if($row['types'] == "user"){
            echo "<script>
            alert('le password est bien changée');
            document.location.href ='tables.php' ;
            </script>";
        }


        
    }
        
    
    
    
    
   



    
   
    
}
session_destroy();
?>