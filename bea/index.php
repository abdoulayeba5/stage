<?php

@include 'conn';
session_start();
$_SESSION['current_url'] = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Education Website</title>
    <!------ Font Awesome ------>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      
    />
    <link rel="stylesheet" href="styles/style.css" />
    <!-- ---- Google Fonts ------>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <!------ Stylesheet ------>
    <!------ Queries ------>
 
    <style>
      body{
        /* background: 500%; */
        /* background-color: red; */
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
      } 
      
      .loader--hidden {
        opacity: 0;
        visibility:visible;
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
    <!------ Scroll To Top Button ------>
    <button id="scroll-top">
      <i class="fas fa-arrow-up"></i>
    </button>
    <!------ Header ------>
    <header>
      <nav>
        <a href="#home" id="logo" style="font-size: 30px;color: #00a8fa;">BEA</a>
        <i class="fas fa-bars" id="ham-menu"></i>
        <ul id="nav-bar">
          <li>
            <a href="index.html">Home</a>
          </li>
          <?php
          if(!in_array('email', array_keys($_SESSION))){
          ?>
            <li>
              <a href="login1"> Login</a>
            </li>
            <?php
          }else if($_SESSION['type']=='user'){
            ?>
            <li>
              <a href="deconnecter"> log out</a>
            </li>
            <li>
              <a href="tables">table</a>
            </li>
            <?php
            }else{?>
            <li>
              <a href="deconnecter"> logg out</a>
            </li>
            <li>
              <a href="administrateur/administrateur">table</a>
            </li>
            <?php
            }?>
            <a href="#features">A props</a>
          </li>
          <li>
            <a href="administrateur/statistique">Données</a>
          </li>
          <li>
            <a href="#testimonial">Contact</a>
          </li>
          
        </ul>
      </nav>
    </header>

    <!------ Section: Hero ------>
    <section class="hero" id="home">
      <img src="images/header-shape.svg" id="header-shape" />
      <div class="hero-content">
        <h1 style="font-size: 30px;">Banque d'El-Amana</h1>
        <p>
          Banque El Amana is a limited company under Mauritanian law, created in 1996 between the Mauritanian State, Commercial Banks, companies and private Mauritanians. It has a varied network of foreign correspondents and a network of agencies which covers the wilayas of Nouakchott, Dakhla and Nouadhibou, Assaba, Trarza and Hodh El Gharbi.
        </p>
        <div class="btn-container">
          <button class="primary-btn btn">céer un compte</button>
          <button class="secondary-btn btn">vous avez déja inscrit</button>
        </div>
      </div>
      <div class="hero-img" style="width: 50%;display: block; align-items: center;">
        <img src="images/h.webp" />
      </div>
    </section>
    <!------ Section: Features ------>
    <section class="features" id="features">
      <h2>pourquoi vous nous choisissez</h2>
      <p class="section-desc">
        banque el-amana est un banque privé qu'il vous permis d'boutisser des services bancaire avec les meilleurs conditions ,
        vous pouvez ainsi de créer des comptes et déposer d'argent ,rétirer d'argent et de transferer l'argent vers n'importe quel pays .
      </p>
      <div class="row">
        <div class="column">
          <i class="fas fa-star"></i>
          <h3>Les meilleur services</h3>
          <p>
            banque el-amana est un banque privé qu'il vous permis d'boutisser des services bancaire avec les meilleurs conditions ,
            vous pouvez ainsi de créer des comptes et déposer d'argent ,rétirer d'argent et de transferer l'argent vers n'importe quel pays .
          </p>
        </div>
        <div class="column">
          <i class="fas fa-thumbs-up"></i>
          <h3>une bonne fonctionnement</h3>
          <p>
            banque el-amana est un banque privé qu'il vous permis d'boutisser des services bancaire avec les meilleurs conditions ,
        vous pouvez ainsi de créer des comptes et déposer d'argent ,rétirer d'argent et de transferer l'argent vers n'importe quel pays .
          </p>
        </div>
        <div class="column">
          <i class="fas fa-graduation-cap"></i>
          <h3>Expérience</h3>
          <p>
            banque el-amana est un banque privé qu'il vous permis d'boutisser des services bancaire avec les meilleurs conditions ,
        vous pouvez ainsi de créer des comptes et déposer d'argent ,rétirer d'argent et de transferer l'argent vers n'importe quel pays .
          </p>
        </div>
      </div>
    </section>
    
    <script src="styles/script.js"></script>
  </body>
</html>
