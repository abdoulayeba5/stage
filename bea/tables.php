<?php

include 'conn';

session_start();
if ($_SESSION['type'] != 'user') {
  header("location: login1");
}
$_SESSION['current_url'] = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <title>Data Table </title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <!-- ========================================================= -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/datatables.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .full-page {
      height: 100%;
      width: 100%;
      background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4));
      background-image: url('styles/header-shape.svg');
      background-position: center;
      background-size: cover;
      position: absolute;
    }

    :root {
      --base-shade-1: #00a8fa;
      --white-shade-1: #ffffff;
      --white-shade-2: #d7e1f3;
      --black-shade-1: #232323;
      --black-shade-2: #676a8b;
      --grad-color-1: 0, 180, 250;
      --grad-color-2: 21, 120, 255;
      --base-font-size: 1.6rem;
      --heading-font-size-1: 4rem;
      --heading-font-size-2: 3.2rem;
      --heading-font-size-3: 2rem;
      --heading-font-size-4: 18px;
      --border-radius-1: 1rem;
      --border-radius-2: 0.5rem;
    }

    /*------ Header ------*/
    header {
      /* position: fixed; */
      width: 100%;
      padding: 25px 50px;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 2rem;
    }

    nav a {
      font-size: var(--heading-font-size-4);
      text-decoration: none;
    }

    nav a#logo {
      color: var(--black-shade-1);
      font-weight: 700;
    }

    nav ul a {
      color: var(--white-shade-1);
    }

    /*-- SideMenu --*/
    #ham-menu {
      display: none;
    }

    nav ul.active {
      left: 0;
    }

    /*-- Sticky Header --*/
    .sticky {
      background-color: var(--white-shade-1);
      box-shadow: 0 2rem 1.5rem rgb(0 0 0 / 5%);
    }

    .sticky nav ul a,
    .sticky nav a#logo,
    .sticky #ham-menu {
      color: var(--black-shade-1);
    }

    /*-- Link Hover Effect --*/
    nav ul a:hover {
      color: var(--black-shade-1);
    }

    .sticky nav ul a:hover {
      color: var(--base-shade-1);
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
      /* background-image: url(blue-copy-space-digital-background_23-2148821698.webp); */
      background-color: #b9bec7;
      transition: opacity 8s, visibility 8s;
    }

    .loader--hidden {
      opacity: 0;
      visibility: hidden;
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

  <div class="full-page">
    <!------ Header ------>
    <header>
      <nav>
        <a href="index#home" id="logo" style="font-size: 30px;color: #00a8fa;">BEA</a>
        <!-- <i class="fas fa-bars" id="ham-menu"></i> -->
        <ul id="nav-bar">
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="deconnecter"> Logout</a>
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
    <!-- =======  Data-Table  = Start  ========================== -->
    <div class="loader"></div>
    <div class="container">

      <div class="row">
        <div class="col-12">
          <div class="data_table">

            <table id="example" class="table table-striped table-bordered">
              <thead class="table-dark">

                <tr position="relative" align="center" ;>
                  <th>CLIENT</th>
                  <th>classe</th>
                  <th>Débit en compte</th>
                  <th>Impayés</th>
                  <th>Escompte commercial</th>
                  <th>Crédits amortissables</th>
                  <th>Eng Directs</th>
                  <th>Credoc</th>
                  <th>Caution</th>
                  <th>Eng_Indire</th>
                  <th>Total Engagements</th>
                  <th>Dépôts</th>
                  <th>autre depot</th>
                </tr>

              </thead>
              <tbody>
                <?php
                $sql = "SELECT * FROM brut where 0";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {

                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr align='center' >
                                    <td>" . $row["CLIENT"] . "</td>
                                    <td>" . $row["classe"] . "</td>
                                    <td>" . $row["Débit_en_compte"] . "</td>
                                    <td>" . $row["Impayés"] . "</td>
                                    <td>" . $row["Escompte_commercial"] . "</td>
                                    <td>" . $row["Crédits_amortissables"] . "</td>
                                    <td>" . $row["Eng_Directs"] . "</td>
                                    <td>" . $row["Credoc"] . "</td>
                                    <td>" . $row["Caution"] . "</td>
                                    <td>" . $row["Eng_Indire"] . "</td>
                                    <td>" . $row["Impayés"] + $row["Débit_en_compte"] + $row["Escompte_commercial"] + $row["Crédits_amortissables"] + $row["Credoc"] + $row["Caution"] . "</td>
                                    <td>" . $row["Dépôts"] . "</td>
                                    <td>" . $row["autre_depot"] . "</td>
                                    </tr>";

                  }
                } else {
                  echo "No results found.";
                }

                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- =======  Data-Table  = End  ===================== -->
  <!-- ============ Java Script Files  ================== -->


  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/datatables.min.js"></script>
  <script src="assets/js/pdfmake.min.js"></script>
  <script src="assets/js/vfs_fonts.js"></script>
  <script src="assets/js/custom.js"></script>




</body>

</html>