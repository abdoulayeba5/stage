<?php

require '../conn.php';
session_start();
$user_id = $_SESSION['email'];
if(isset($_POST['update_student']))
{
    $CLIENT = mysqli_real_escape_string($conn, $_POST['CLIENT']);
    $Escompte_commercial = mysqli_real_escape_string($conn, $_POST['Escompte_commercial']);
    $classe = mysqli_real_escape_string($conn, $_POST['classe']);
    $Débit_en_compte = mysqli_real_escape_string($conn, $_POST['Débit_en_compte']);
    $Impayés = mysqli_real_escape_string($conn, $_POST['Impayés']);
    $Crédits_amortissables = mysqli_real_escape_string($conn, $_POST['Crédits_amortissables']);
    $Eng_Directs = mysqli_real_escape_string($conn, $_POST['Eng_Directs']);
    $Credoc = mysqli_real_escape_string($conn, $_POST['Credoc']);
    $Caution = mysqli_real_escape_string($conn, $_POST['Caution']);
    $Eng_Indire = mysqli_real_escape_string($conn, $_POST['Eng_Indire']);
    $Dépôts = mysqli_real_escape_string($conn, $_POST['Dépôts']);
    $autre_depot = mysqli_real_escape_string($conn, $_POST['autre_depot']);
    $date=date("Y-m-d H:i:s");
   

    $query_histori="INSERT INTO `historique`(`user`,`update_table`,`Datte`) VALUES ('$user_id','$CLIENT','$date')";
    $query = "UPDATE `brut` SET `CLIENT`='$CLIENT',`classe`='$classe',`Débit_en_compte`='$Débit_en_compte',`Impayés`='$Impayés',`Escompte_commercial`='$Escompte_commercial',`Crédits_amortissables`='$Crédits_amortissables',`Eng_Directs`='$Eng_Directs',`Credoc`='$Credoc',`Caution`='$Caution',`Eng_Indire`='$Eng_Indire',`Dépôts`='$Dépôts',`autre_depot`='$autre_depot' WHERE CLIENT='$CLIENT'"; 
    $query_run = mysqli_query($conn, $query);
    $query_his_run = mysqli_query($conn, $query_histori);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Student Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Student Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['CLIENT']))
{
    $CLIENT = mysqli_real_escape_string($conn, $_GET['CLIENT']);

    $query = "SELECT * FROM brut WHERE CLIENT='$CLIENT'";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $student = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Student Fetch Successfully by id',
            'data' => $student
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Student Id Not Found'
        ];
        echo json_encode($res);
        return;
    }
}



?>