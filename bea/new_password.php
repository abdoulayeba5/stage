<?php

@include 'configuration.php';
if (isset($_POST["s'inscrire"])) {
  $nom = mysqli_real_escape_string($conn, $_POST['nom']);
  $prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $mot_de_passe = $_POST['mot_de_passe'];
  $cmot_de_passe = $_POST['cmot_de_passe'];
  $type = $_POST["types"];


  $select = "SELECT * FROM users WHERE email='$email' && mot_de_passe='$mot_de_passe'";
  $result = mysqli_query($conn, $select);
  if (mysqli_num_rows($result) > 0) {
    $eurreur[] = 'ce utilisateur existe deja ';

  } else {

    if ($mot_de_passe != $cmot_de_passe) {
      $eurreur[] = 'mots de passe non identique';
    } else {

      $insert = "INSERT INTO users (nom,prenom,email,mot_de_passe,types) VALUES ('$nom','$prenom','$email','$mot_de_passe','$type')";
      mysqli_query($conn, $insert);
      header('location:login1.php');


    }
  }


} else if (isset($_POST["connecter"])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $mot_de_passe = $_POST['mot_de_passe'];


  $select = "SELECT * FROM users WHERE email='$email' && mot_de_passe='$mot_de_passe'";
  $result = mysqli_query($conn, $select);
  if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_array($result);
    if ($row["types"] == 'admin') {

      $_SESSION['nom_admistrateur'] = $row['nom'];
      header('location:admin/administrateur.php');

    } else {

      $_SESSION['nom_utilisateur'] = $row['nom'];
      header('location:tables.php');
    }

  } else {
    $eurreur[] = 'email ou mot de passe incorrect';
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>login page</title>

  <!---we had linked our css file----->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="styles/style.css" />
  <link rel="stylesheet" href="styles/aa.css">
  <!-- ---- Google Fonts ------>
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin /> -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
  <!------ Stylesheet ------>
  <!------ Queries ------>
  <style>
    .loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background-image: url(blue-copy-space-digital-background_23-2148821698.webp);
      transition: opacity 5s, visibility 5s;
      background-size: cover;
    }

    .loader--hidden {
      opacity: 0;
      visibility: visible;
    }

    .loader::after {
      content: "";
      width: 75px;
      height: 75px;
      border: 15px solid #dddddd;
      border-top-color: #000000;
      border-radius: 50%;
      animation: loading 8s ease infinite;
    }

    @keyframes loading {
      from {
        transform: rotate(0turn);
      }

      to {
        transform: rotate(10turn);
      }
    }
  </style>
  <script>
    window.addEventListener("load", () => {
      const loader = document.querySelector(".loader");

      loader.classList.add("loader--hidden");

      loader.addEventListener("transitionend", () => {
        document.body.removeChild(loader);
      });
    });

  </script>
</head>

<body>
  <div class="loader"></div>
  <div class="full-page">
    <!------ Header ------>
    <header>
      <nav>
        <a href="index#home" id="logo" style="font-size: 30px;color: #00a8fa;">BEA</a>
        <i class="fas fa-bars" id="ham-menu"></i>
        <ul id="nav-bar">
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="login1.php"> Login</a>
          </li>
          <a href="index#features">A props</a>
          </li>
          <li>
            <a href="login1.php">Données</a>
          </li>
          <li>
            <a href="index#testimonial">Contact</a>
          </li>

        </ul>
      </nav>
    </header>
    <!-- <div id='login-form'class='login-page'> -->
    <div class="form-box">

      <form id='login' class='input-group-login' method="POST" action="change_password.php">
        <input type='password' class='input-field' placeholder='new password' required
          name="new_password"><br><br><br><br><br>


        <button type='submit' class='submit-btn' name="new_p_button">update</button>
      </form>
      </form>

    </div>
  </div>
  </div>
  <script>
    var x = document.getElementById('login');
    var y = document.getElementById('register');
    var z = document.getElementById('btn');
    function register() {
      x.style.left = '-400px';
      y.style.left = '50px';
      z.style.left = '110px';
    }
    function login() {
      x.style.left = '50px';
      y.style.left = '450px';
      z.style.left = '0px';
    }
  </script>
  <script>
    var modal = document.getElementById('login-form');
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
</body>

</html>