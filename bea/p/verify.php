<?php

require_once "connection.php";

require "email.php";

require "send.php";

if(isset($_POST["send"])){
    $email = $_POST["forgoten_email"];
    $query = "SELECT * from users where email = $email and code= $code";
    $res = mysqli_query($con, $query);
    if(mys)



    
    echo "<script>
    alert('le message est envoyée avec succée ');
    document.location.href ='index.php' ;
    </script>";
    
}

?>