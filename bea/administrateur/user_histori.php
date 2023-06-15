<?php
include '../conn.php';
session_start();
$_SESSION['current_url'] = $_SERVER['REQUEST_URI'];
$emaill = "bla";
if (isset($_GET["var1"])) {
    $emaill = $_GET["var1"];
   }
?>
<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
   <style>
    .hhhhh{
  border-radius: 20%;
  height: 80px;
  width: 80px;
  margin-left: -20px;
  
}
 html {
      box-sizing: border-box;
      font-family: 'Open Sans', sans-serif;
    }

    *,
    *:before,
    *:after {
      box-sizing: inherit;
    }



    @media (min-width: 900px) {
      .background {
        padding: 0 0 10px;
      }
    }

    .container {
      margin: 0 auto;
      padding: 5px 0 0;
      max-width: 960px;
      width: 100%;
    }

    .panel {
      background-color: #fff;
      border-radius: 10px;
      position: relative;
      width: 100%;
      z-index: 10;
    }

    .pricing-table {
      box-shadow: 0px 10px 13px -6px rgba(0, 0, 0, 0.08), 0px 20px 31px 3px rgba(0, 0, 0, 0.09), 0px 8px 20px 7px rgba(0, 0, 0, 0.02);
      display: flex;
      flex-direction: column;
    }

    @media (min-width: 900px) {
      .pricing-table {
        flex-direction: row;
      }
    }

    .pricing-table * {
      text-align: center;
      text-transform: uppercase;
    }

    .pricing-plan {
      border-bottom: 1px solid #e1f1ff;
      
    }

    .pricing-plan:last-child {
      border-bottom: none;
    }

    @media (min-width: 900px) {
      .pricing-plan {
        border-bottom: none;
        border-right: 1px solid #e1f1ff;
        flex-basis: 100%;
        padding: 20px 50px;
      }

      .pricing-plan:last-child {
        border-right: none;
      }
    }

    .pricing-img {
      margin-bottom: 25px;
      max-width: 100%;
    }

    .pricing-header {
      color: #888;
      font-weight: 600;
      letter-spacing: px;
    }

    .pricing-features {
      color: #016FF9;
      font-weight: 600;
      letter-spacing: 1px;
      margin: 10px 0 0px;
    }

    .pricing-features-item {
      border-top: 1px solid #e1f1ff;
      font-size: 20px;
      line-height: 1.5;
    
    }

    .pricing-features-item:last-child {
      border-bottom: 1px solid #e1f1ff;
    }

    .pricing-price {
      color: #016FF9;
      display: block;
      font-size: 32px;
      font-weight: 700;
    }
    .pricing-button {
      border: 1px solid #9dd1ff;
      border-radius: 10px;
      color: #348EFE;
      display: inline-block;
      padding: 15px 10px;
      text-decoration: none;
      transition: all 150ms ease-in-out;
    }
    
    .pricing-button:hover,
    .pricing-button:focus {
      background-color: #e1f1ff;
    }
    
    .pricing-button.is-featured {
      background-color: #48aaff;
      color: #fff;
    }
    
    .pricing-button.is-featured:hover,
    .pricing-button.is-featured:active {
      background-color: #269aff;
    }
   </style>
</head>
<body>
    <nav class="sidebar close">
    <header>
      <div class="image-text">
        <img src="https://tse2.mm.bing.net/th?id=OIP.KpYjRrgvb6VbmgFCth0x0AAAAA&pid=Api&P=0&h=180" class="hhhhh" id="hhhhh">
      </div>

      <i class='bx bx-chevron-right toggle'></i>
    </header>


        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                <li class="nav-link">
                        <a href="../index">
                        <i class='bx bx-home icon'></i>
                            <span class="text nav-text">home</span>
                        </a>
                    </li>
                <li class="nav-link">
                    
                <a href="administrateur">
                        <i class='bx bx-table icon'></i>
                            <span class="text nav-text">table</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="statistique">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">statistique</span>
                        </a>
                    </li>

                    <?php
                    if ($_SESSION['type']!='super_admin'){?>
                    <li class="nav-link">
                    <a href="create_user">
                        <i class='bx bx-user icon' ></i>
                            <span class="text nav-text">add user</span>
                        </a>
                    </li>
                    <?php
                    }?>

                    <?php
                    if ($_SESSION['type']=='super_admin'){?>
                    <li class="nav-link">
                        <a href="historique">
                        <i class='bx bx-user icon' ></i>
                            <span class="text nav-text">user</span>
                        </a>
                    </li><?php
                    }?>

                    <li class="nav-link">
                        <a href="user_histori">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">my historique</span>
                        </a>
                    </li>

                   

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="../deconnecter">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
    <div class="background">
  <div class="container">
    <div class="panel pricing-table">
      
      <div class="pricing-plan">
        <h2 class="pricing-header">Date</h2>
      </div>
      
      <div class="pricing-plan">
        
        <h2 class="pricing-header">Action</h2>
        

      </div>
      
      <div class="pricing-plan">
       
        <h2 class="pricing-header">utilisateur ou client</h2>
       
      
      </div>
      
    </div>
  </div>
</div>
 
        <?php
            if($emaill=="bla"){
            $user_id = $_SESSION['email'];
            }
            else{
                $user_id=$emaill;  
            }
            $query="SELECT * FROM `historique` WHERE user='$user_id' ORDER BY Datte DESC;";
            $query_run = mysqli_query($conn, $query);

            if(mysqli_num_rows($query_run) > 0)
            {
                foreach($query_run as $row)
                {
                    if($row['creat_users']!=Null){
            ?>     
 <div class="background">
  <div class="container">
    <div class="panel pricing-table">
      
      <div class="pricing-plan">
        
        <ul class="pricing-features">
          <li class="pricing-features-item"><?=$row["Datte"]?></li>
          
        </ul>
      </div>
      
      <div class="pricing-plan">
        
        
        <ul class="pricing-features">
          <li class="pricing-features-item">cree un utilisateur de email</li>
          
        </ul>

      </div>
      
      <div class="pricing-plan">
       
       
        <ul class="pricing-features">
          <li class="pricing-features-item"><?=$row["creat_users"]?></li>
        </ul>
      
      </div>
      
    </div>
  </div>
</div>
<?php
          }
          else if($row['update_table']!=Null){?>
           <div class="background">
           <div class="background">
  <div class="container">
    <div class="panel pricing-table">
      
      <div class="pricing-plan">
       
        <ul class="pricing-features">
          <li class="pricing-features-item"><?=$row["Datte"]?></li>
          
        </ul>
      </div>
      
      <div class="pricing-plan">
        
       
        <ul class="pricing-features">
          <li class="pricing-features-item">modifier un client de matricule</li>
          
        </ul>

      </div>
      
      <div class="pricing-plan">
       
      
        <ul class="pricing-features">
          <li class="pricing-features-item"><?=$row["update_table"]?></li>
        </ul>
      
      </div>
      
    </div>
  </div>
</div>
<?php
}
else{
?>
  <div class="container">
    <div class="panel pricing-table">
      
      <div class="pricing-plan">
       
        <ul class="pricing-features">
          <li class="pricing-features-item"><?=$row["Datte"]?></li>
          
        </ul>
      </div>
      
      <div class="pricing-plan">
        
        
        <ul class="pricing-features">
          <li class="pricing-features-item">supprimer l'utilisateur de l'email</li>
          
        </ul>

      </div>
      
      <div class="pricing-plan">
       
        
        <ul class="pricing-features">
          <li class="pricing-features-item"><?=$row["delete_user"]?></li>
        </ul>
      
      </div>
      
    </div>
  </div>
</div>
<?php
          
                                }}
                            }
                            ?>
    </section>
 
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
      
      
      <script>
    const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");

    var i = 1;
    console.log(i);

    toggle.addEventListener("click", () => {
      sidebar.classList.toggle("close");
      if (i % 2 == 1) {
    
        const element1 = document.getElementById('hhhhh');
        element1.style.marginLeft = '50px';
        console.log(i);
      } else {
   
        const element1 = document.getElementById('hhhhh');
        element1.style.marginLeft = '-20px';
        console.log(i);
      }
      i = i + 1;
      console.log(i);
    });

    searchBtn.addEventListener("click", () => {
      sidebar.classList.remove("close");

    })

    modeSwitch.addEventListener("click", () => {
      body.classList.toggle("dark");

      if (body.classList.contains("dark")) {
        modeText.innerText = "Light mode";
      } else {
        modeText.innerText = "Dark mode";

      }
    });
  </script>
</body>
</html>
