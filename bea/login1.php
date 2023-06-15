<?php

@include 'conn.php';
$_SESSION['current_url'] = $_SERVER['REQUEST_URI'];
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

      $insert = "INSERT INTO users (nom,prenom,email,mot_de_passe,types) VALUES ('$nom','$prenom','$email','$mot_de_passe','user')";
      mysqli_query($conn, $insert);
      header('location:login1');


    }
  }


} else if (isset($_POST["connecter"])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $mot_de_passe = $_POST['mot_de_passe'];

  session_start();
  $select = "SELECT * FROM users WHERE email='$email' && mot_de_passe='$mot_de_passe'";
  $result = mysqli_query($conn, $select);
  if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_array($result);
    if ($row["types"] == 'admin' or $row["types"] == 'super_admin') {
      $_SESSION['email'] = $row["email"];
      $_SESSION['type'] = $row["types"];
      header('location:index');

    } else {

      $_SESSION['types'] = $row["types"];
      header('location:index');
    }

  } else {
    echo "<script>
        alert('email ou mot de passe incorrect');
        </script>";
    $eurreur[] = 'email ou mot de passe incorrect';
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>login page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!---we had linked our css file----->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="styles/style.css" />
  <link rel="stylesheet" href="styles/a.css">
  <!-- ---- Google Fonts ------>
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin /> -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
  <!------ Stylesheet ------>
  <!------ Queries ------>
  <style>
    .forget-password {
      text-decoration: none;
      /* text-shadow: #00a8fa 10px 0px; */
      /* color: #676a8b; */
      /* size: 200px; */
      font-size: 15px;
    }

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
            <a href="index">Home</a>
          </li>
          <li>
            <a href="login1"> Login</a>
          </li>
          <a href="index#features">A props</a>
          </li>
          <li>
            <a href="login1">Données</a>
          </li>
          <li>
            <a href="index#testimonial">Contact</a>
          </li>

        </ul>
      </nav>
    </header>
    <!-- <div id='login-form'class='login-page'> -->
    <div class="form-box">
      <div class='button-box'>
        <div id='btn'></div>
        <button type='button' onclick='login()' class='toggle-btn'>Log In</button>
        <button type='button' onclick='register()' class='toggle-btn'>Register</button>
      </div>
      <form id='login' class='input-group-login' method="POST">
        <br><br>
        <input type='text' class='input-field' placeholder='Email' required name="email"><br><br>
        <input type='password' class='input-field' placeholder='password' required name="mot_de_passe"><br><br><br><br>
        <a class="forget-password" href="email">forget password</a><br><br><br>
        <button type='submit' class='submit-btn' name="connecter" value="connecter">log in</button>
      </form>
      </form>
      <form id='register' class='input-group-register' method="POST">
        <input type='text' class='input-field' placeholder='First Name' required name="nom">
        <input type='text' class='input-field' placeholder='Last Name ' required name="prenom">
        <input type='email' class='input-field' placeholder='Email Id' required name="email">
        <input type='password' class='input-field' placeholder='Enter Password' required name="mot_de_passe">
        <input type='password' class='input-field' placeholder='Confirm Password' required name="cmot_de_passe">

        <input type='checkbox' class='check-box'>I agree to the terms and conditions
        <button type='submit' class='submit-btn' name="s'inscrire" value="s'inscrire">Register</button>
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