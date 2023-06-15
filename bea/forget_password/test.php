<?php 
require_once "connection.php";
$eureurs = array();
if(isset($_POST['seconnecter'])){
    $email = $_POST['email']; 
    $nom = $_POST['nom'];
    
    $query = "SELECT * FROM users where email = '$email';";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0){
        $eureurs['email'] = "L'Email que vous avez entré est déja existe!";
    }
    else{
        $email = $_POST['email']; 
        $nom = $_POST['nom'];
        $password = $_POST['password'];
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $query  = "INSERT INTO users (nom, email, password, code, status)
        values('$nom', '$email', '$encpass', '$code', '$status');";
        $res = mysqli_query($con, $query);
    }

}

// foreach($eureurs as $eureur){
//     echo $eureur;
// }
// echo $nom , $email , $password , $code , $status

?>