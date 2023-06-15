<?php 
require_once "connection.php";
$eureurs = array();
if(isset($_POST['creer_c'])){
    $email = $_POST['email'];
    $query = "SELECT * FROM users where email = '$email';";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0){
        $eureurs['email'] = "L'Email que vous avez entré est déja existe!";
    }
    else{
        
        $password = $_POST['password'];
        $cpassaword = $_POST['cpassword'];
        if($cpassaword == $password){
            $email = $_POST['email']; 
            $nom = $_POST['nom'];
            $password = $_POST['password'];
            $encpass = password_hash($password, PASSWORD_BCRYPT);
            $code = rand(999999, 111111);
            $status = "notverified";
            $query  = "INSERT INTO users (nom, email, password, code, status)
            values('$nom', '$email', '$encpass', '$code', '$status');";
            $res = mysqli_query($con, $query);
            header();
        }
        else{
            $eureurs['confirme_password'] = "Les deux password ne sont pas identique";
        }
        
    }
}
