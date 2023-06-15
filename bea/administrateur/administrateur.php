<?php

include '../conn.php';

session_start();
if ($_SESSION['type'] != 'admin' && $_SESSION['type'] != 'super_admin') {
  header("location: ../login1");
}
$_SESSION['current_url'] = $_SERVER['REQUEST_URI'];
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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <!-- ========================================================= -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/datatables.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />

    <title>Dashboard Sidebar Menu</title> 
     <style>
      
.hhhhh{
  border-radius: 20%;
  height: 80px;
  width: 80px;
  margin-left: -20px;
  
}
         #toggleButton{
        border-radius: 50%;
        display: inline-block;
    padding: 0px 2px;
    font-size: 16px;
    font-weight: bold;
    border: none;
    background-color: #E4E9F7;
    cursor: pointer;
    /* box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); */
    transition: all 0.3s ease;
    /* position: fixed; */
    color: #131212;
    font-size: 50px;
    font-weight: bold;
    white-space: nowrap;
    opacity: 1;
    text-decoration: none;
    margin-left: 1500px;
      }
   #example thead th:nth-child(7),
  #example thead th:nth-child(8),
  #example thead th:nth-child(9),
  #example thead th:nth-child(10),
  #example thead th:nth-child(11),
  #example thead th:nth-child(12),
  #example tbody td:nth-child(7),
  #example tbody td:nth-child(8),
  #example tbody td:nth-child(9),
  #example tbody td:nth-child(10),
  #example tbody td:nth-child(11),
  #example tbody td:nth-child(12) {
    display: none;
  }
  .hide {
    display: none;
  }
 
.menu-bar .menu {
  position: relative;
  margin-left: -50px;

}
.bla {
      position: relative;
      text-align: center;
      /* margin-left: 40%; */
      /* display: flex; */
      /* width: 50%; */
      /* margin-right: 50px; */
      /* Ajoutez un espace pour l'input */
      /* margin-bottom: 2px; */
      
      
    }

    .bla input {
      display: inline-block;
      /* left: 50%; */
    }

    .bla select {
      display: inline-block;
      /* position: absolute; */
      /* margin-left: 55%; */
      
    }
    .bla button {
      /* position: relative; */
      margin: 1px;
      width: 5%;
      height: 50%;
    }
    /* .bla a{
      margin-left: 50%;
    } */
    p{
      font-size: 20px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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

                <!-- <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li> -->

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
<!--  -->

                    <li class="nav-link">
                        <a href="historique">
                        <i class='bx bx-user icon' ></i>
                            <span class="text nav-text">user</span>
                        </a>
                    </li>

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
        <div class="table_disign">
          <?php
          if(!isset($_GET['page']) && !isset($_POST['tout']) && !isset($_POST['filtre']) && !isset($_GET['pagef'])) {
          ?> 
            <div class="bla">
            <form id="myForm" class="form-inline" method="POST" id="bla">
        <input type="number" class="form-control" placeholder="Search with id ..." style="width:15%" name="keyword"
          value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>" />
        <span class="input-group-btn">
          <button class="btn btn-primary" name="search"  value="search">search</button>
          <button class="btn btn-primary" name="tout" value="tout">tout</button>
          <br>
          <select class="form-select" aria-label="Default select example" style="width:15% ; left:0%" name="classe">
             <?php $query = "SELECT * FROM `brut` GROUP BY classe;"; 
       
            $query_run = mysqli_query($conn, $query);

            if (mysqli_num_rows($query_run) > 0) {
              foreach ($query_run as $row) {
                ?>

                <option name="classe" value="<?= $row["classe"] ?>"> classe : <?= $row["classe"] ?> </option>
                <?php
              }
            }
            ?> 

          </select>
          <button class="btn btn-primary" name="filtre" value="filtre" style="right:0%">filtre</button>
      </form>
            
            <?php
          }else{
            ?>
            <a href="administrateur" class="btn btn-primary" style="margin-left: 50%;"> << GO BACK </a>
            
            <?php 

          }
          ?>
          </div>
            
            <!-- =======  Data-Table  = Start  ========================== -->
            <button id="toggleButton"><i id="flech" class='bx bx-right-arrow-alt icon'></i></button>
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
                          <th>Eng Indire</th>
                          <th>Total Engagements</th>
                          <th>Dépôts</th>
                          <th>autre depot</th>
                          <th>action</th>
            
                        </tr>
            
                      </thead>
                      <tbody>
                        <?php
                        require '../conn.php';
                        $limit = 10;
                        
                        
                        if (isset($_POST)) {
                          if (isset($_GET['page'] )|| isset($_POST['tout'])) {
                            
                           
                            if(isset($_GET['page'])){
                              $page = $_GET['page'];
                          }else{
                              $page = 1;
                          }
            
                          $offset = ($page - 1) * $limit;
                            
            
                            $query = "SELECT * from brut LIMIT $offset, $limit";
                            $query2 = "SELECT COUNT(*) from brut";
                       
                            
            
                           
                          } else if (isset($_POST['search'])) {
                            $keyword = $_POST['keyword'];
                            $query = "SELECT * FROM `brut` WHERE `client` = '$keyword'";
                          }  else if (isset($_POST['filtre']) || isset($_GET['pagef'])) {
                            if(isset($_POST['filtre'])){
                            $_SESSION['class'] = $_POST['classe'];
                            $classe=$_SESSION['class'];
                          }else{
                            $classe=$_SESSION['class'];
                          }
                            if(isset($_GET['pagef'])){
                              $pagef = $_GET['pagef'];
                          }else{
                              $pagef = 1;
                          }
            
                          $offset = ($pagef - 1) * $limit;
            
            
                            // $query = "SELECT * from brut LIMIT $offset, $limit";
                            $query2 = "SELECT COUNT(*) from brut  WHERE `classe` = '$classe'";
                       
                            
                            $query = "SELECT * from `brut` WHERE `classe` = '$classe' LIMIT $offset, $limit";
                  
                          } else {
                          
                            $query = "SELECT * FROM `brut` WHERE 0";
                          
                          }
                         
                          $query_run = mysqli_query($conn, $query);
            
                          if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $row) {
                              ?>
                              <tr align='center'>
            
                                <td><?= $row["CLIENT"] ?></td>
                                <td><?= $row["classe"] ?></td>
                                <td><?= $row["Débit_en_compte"] ?></td>
                                <td><?= $row["Impayés"] ?></td>
                                <td><?= $row["Escompte_commercial"] ?></td>
                                <td><?= $row["Crédits_amortissables"] ?></td>
                                <td><?= $row["Eng_Directs"] ?></td>
                                <td><?= $row["Credoc"] ?></td>
                                <td><?= $row["Caution"] ?></td>
                                <td><?= $row["Eng_Indire"] ?></td>
                                <td>
                                  <?= $row["Impayés"] + $row["Débit_en_compte"] + $row["Escompte_commercial"] + $row["Crédits_amortissables"] + $row["Credoc"] + $row["Caution"] ?>
                                </td>
                                <td><?= $row["Dépôts"] ?></td>
                                <td><?= $row["autre_depot"] ?></td>
            
            
                                <td>
            
                                  <button type="button" value="<?= $row['CLIENT']; ?>"
                                    class="editStudentBtn btn btn-success btn-sm">Edit</button>
            
                                </td>
                              </tr>
                              <?php
                            }
                          }
                        }
                      // }
                        ?>
            
                      </tbody>
                    </table>
                    
                    <?php
                  if(isset($_POST['tout'])|| isset($_GET['page']) ){

                    // essaye de revoyer la variable querry comme page  page 
                    
                    // $query2 = "SELECT COUNT(*) from brut";
                    $query_run = mysqli_query($conn, $query2);
                    $total_rows = mysqli_fetch_array($query_run)[0];
                    $total_page = ceil($total_rows / $limit);
                ?>
                <p><b> all data :<?php echo $total_rows ?> </b></p>
            
                  <nav aria-label="...">
                  <ul class="pagination">
                    <li class="page-item ">
                      <a class="page-link" href="<?php if($page <= 1){echo '#';}else{echo "?page=".$page -1;} ?>" tabindex="-1">Previous</a>
                    </li>
                    <?php 
                        for($i = 1; $i <= $total_page; $i++){
            
                            if($page == $i){
                              $a=$page;
                                echo "<li class='page-item active'> <a class='page-link' href='?page=$i'>".$i."</a></il>";
                            }else{
                              if($page==$i-1 or $page==$i+1){
                                echo "<li class='page-item'> <a class='page-link' href='?page=$i'>".$i."</a></il>";
                            }
                            if($i==1 and $page!=2 ){
                              echo "<li class='page-item'> <a class='page-link' href='?page=$i'>".$i."</a></il>";
                            }elseif($total_page==$i and $page!=$total_page-1){
                              echo "<li class='page-item'> <a class='page-link' href='?page=$i'>".$i."</a></il>";
                            }
                          }
                        }
                    ?>
                   <li class="page-item">
                      <a class="page-link" href="<?php if($page == $total_page ){echo '#';}else{echo "?page=".$page + 1;} ?>">Next</a>
                    </li>
                  </ul>
                </nav>
                
                <form action="administrateur" method="GET">
                    
                    <select name="page" onchange="this.form.submit()">
                        <?php 
                            echo "<option value='$page '>PAGE :".$page."</option>";
                            for($i = 1; $i <= $total_page; $i++){
                                echo "<option value='$i'>".$i."</option>";
                            }
                        ?>
                        
                    </select>
                    
                </form>
                <?php
              }
              ?>
               <?php
                  if(isset($_POST['filtre'])|| isset($_GET['pagef']) ){

                    // essaye de revoyer la variable querry comme page  page 
                    
                    // $query2 = "SELECT COUNT(*) from brut";
                    $query_run = mysqli_query($conn, $query2);
                    $total_rows = mysqli_fetch_array($query_run)[0];
                    $total_pagef = ceil($total_rows / $limit);
                ?>
                <p><b> all data :<?php echo $total_rows ?> </b></p>
                
                  <nav aria-label="...">
                  <ul class="pagination">
                    <li class="page-item ">
                      <a class="page-link" href="<?php if($pagef <= 1){echo '#';}else{echo "?pagef=".$pagef -1;} ?>" tabindex="-1">Previous</a>
                    </li>
                    <?php 
                        for($i = 1; $i <= $total_pagef; $i++){
            
                            if($pagef == $i){
                              $a=$pagef;
                                echo "<li class='page-item active'> <a class='page-link' href='?pagef=$i'>".$i."</a></il>";
                            }else{
                              if($pagef==$i-1 or $pagef==$i+1){
                                echo "<li class='page-item'> <a class='page-link' href='?pagef=$i'>".$i."</a></il>";
                            }
                            if($i==1 and $pagef!=2 ){
                              echo "<li class='page-item'> <a class='page-link' href='?pagef=$i'>".$i."</a></il>";
                            }elseif($total_pagef==$i and $pagef!=$total_pagef-1){
                              echo "<li class='page-item'> <a class='page-link' href='?pagef=$i'>".$i."</a></il>";
                            }
                          }
                        }
                    ?>
                   <li class="page-item">
                      <a class="page-link" href="<?php if($pagef == $total_pagef ){echo '#';}else{echo "?pagef=".$pagef + 1;} ?>">Next</a>
                    </li>
                  </ul>
                </nav>
                
                <form action="administrateur" method="GET">
                    
                    <select name="pagef" onchange="this.form.submit()">
                        <?php 
                            echo "<option value='$pagef '>PAGE :".$pagef."</option>";
                            for($i = 1; $i <= $total_pagef; $i++){
                                echo "<option value='$i'>".$i."</option>";
                            }
                        ?>
                        
                    </select>
                    
                </form>

                
                <?php
              }
              ?>
              
              
                  </div>
                </div>
              </div>
            </div>
    
            <script>
 const toggleButton = document.getElementById('toggleButton');
 var flech = document.getElementById("flech");
const columnsToHide = [0, 1, 2, 3, 4, 5, 6];
const columnsToShow = [7, 8, 9, 10, 11, 12];
const tableRows = document.querySelectorAll('#example thead tr');
const tableColumns = document.querySelectorAll('#example tbody tr');
var i = 1;
toggleButton.addEventListener('click', function() {
  if (i % 2 == 1) {
    flech.classList.remove("bx-right-arrow-alt");
    flech.classList.add("bx-left-arrow-alt");
    columnsToHide.forEach(function(columnIndex) {
      tableRows.forEach(function(row) {
        const cells = row.getElementsByTagName('th');
        cells[columnIndex].style.display = 'none';
      });
      tableColumns.forEach(function(row) {
        const cells = row.getElementsByTagName('td');
        cells[columnIndex].style.display = 'none';
      });
    });
    columnsToShow.forEach(function(columnIndex) {
      tableRows.forEach(function(row) {
        const cells = row.getElementsByTagName('th');
        cells[columnIndex].style.display = 'table-cell';
      });
      tableColumns.forEach(function(row) {
        const cells = row.getElementsByTagName('td');
        cells[columnIndex].style.display = 'table-cell';
      });
    });
  } else {
    flech.classList.remove("bx-left-arrow-alt");
    flech.classList.add("bx-right-arrow-alt");
    columnsToHide.forEach(function(columnIndex) {
      tableRows.forEach(function(row) {
        const cells = row.getElementsByTagName('th');
        cells[columnIndex].style.display = 'table-cell';
      });
      tableColumns.forEach(function(row) {
        const cells = row.getElementsByTagName('td');
        cells[columnIndex].style.display = 'table-cell';
      });
    });
    columnsToShow.forEach(function(columnIndex) {
      tableRows.forEach(function(row) {
        const cells = row.getElementsByTagName('th');
        cells[columnIndex].style.display = 'none';
      });
      tableColumns.forEach(function(row) {
        const cells = row.getElementsByTagName('td');
        cells[columnIndex].style.display = 'none';
      });
    });
  }
  i=i+1;
});

</script>
            
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
            
            <script>
            
            $(document).on('click', '.editStudentBtn', function () {
            
              var CLIENT = $(this).val();
            
              $.ajax({
                type: "GET",
                url: "code?CLIENT=" + CLIENT,
                success: function (response) {
            
                  var res = jQuery.parseJSON(response);
                  if (res.status == 404) {
            
                    alert(res.message);
                  } else if (res.status == 200) {
            
                    $('#CLIENT').val(res.data.CLIENT);
                    $('#classe').val(res.data.classe);
                    $('#Débit_en_compte').val(res.data.Débit_en_compte);
                    $('#Impayés').val(res.data.Impayés);
                    $('#Escompte_commercial').val(res.data.Escompte_commercial);
                    $('#Crédits_amortissables').val(res.data.Crédits_amortissables);
                    $('#Eng_Directs').val(res.data.Eng_Directs);
                    $('#Credoc').val(res.data.Credoc);
                    $('#Caution').val(res.data.Caution);
                    $('#Eng_Indire').val(res.data.Eng_Indire);
                    $('#Dépôts').val(res.data.Dépôts);
                    $('#autre_depot').val(res.data.autre_depot);
            
            
                    $('#studentEditModal').modal('show');
                  }
            
                }
              });
            
            });
            
            $(document).on('submit', '#updateStudent', function (e) {
              e.preventDefault();
            
              var formData = new FormData(this);
              formData.append("update_student", true);
            
              $.ajax({
                type: "POST",
                url: "code",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
            
                  var res = jQuery.parseJSON(response);
                  if (res.status == 422) {
                    $('#errorMessageUpdate').removeClass('d-none');
                    $('#errorMessageUpdate').text(res.message);
            
                  } else if (res.status == 200) {
            
                    $('#errorMessageUpdate').addClass('d-none');
            
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(res.message);
            
                    $('#studentEditModal').modal('hide');
                    $('#updateStudent')[0].reset();
            
                    $('#example').load(location.href + " #example");
            
                  } else if (res.status == 500) {
                    alert(res.message);
                  }
                }
              });
            
            });
            
            
            
            
            </script>
            <script src="../assets/js/bootstrap.bundle.min.js"></script>
            <script src="../assets/js/jquery-3.6.0.min.js"></script>
            <script src="../assets/js/datatables.min.js"></script>
            <script src="../assets/js/pdfmake.min.js"></script>
            <script src="../assets/js/vfs_fonts.js"></script>
            <script src="../assets/js/custom.js"></script>

            <div class="modal fade" id="studentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Client</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="updateStudent">
          <div class="modal-body">

            <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>
            <div class="mb-3">
              <label for="">CLIENT</label>
              <input type="text" name="CLIENT" id="CLIENT" class="form-control" />
            </div>
            <div class="mb-3">
              <label for="">classe</label>
              <input type="text" name="classe" id="classe" class="form-control" />
            </div>
            <div class="mb-3">
              <label for="">Débit en compte</label>
              <input type="number" step="0.00001" name="Débit_en_compte" id="Débit_en_compte" class="form-control" />
            </div>
            <div class="mb-3">
              <label for="">Impayés</label>
              <input type="number" step="0.00001" name="Impayés" id="Impayés" class="form-control" />
            </div>
            <div class="mb-3">
              <label for="">Escompte commercial</label>
              <input type="number" step="0.00001" name="Escompte_commercial" id="Escompte_commercial"
                class="form-control" />
            </div>
            <div class="mb-3">
              <label for="">Crédits amortissables</label>
              <input type="number" step="0.00001" name="Crédits_amortissables" id="Crédits_amortissables"
                class="form-control" />
            </div>
            <div class="mb-3">
              <label for="">Eng Directs</label>
              <input type="number" step="0.00001" name="Eng_Directs" id="Eng_Directs" class="form-control" />
            </div>
            <div class="mb-3">
              <label for="">Credoc</label>
              <input type="number" step="0.00001" name="Credoc" id="Credoc" class="form-control" />
            </div>
            <div class="mb-3">
              <label for="">Caution</label>
              <input type="number" step="0.00001" name="Caution" id="Caution" class="form-control" />
            </div>
            <div class="mb-3">
              <label for="">Eng Indire</label>
              <input type="number" step="0.00001" name="Eng_Indire" id="Eng_Indire" class="form-control" />
            </div>
            <div class="mb-3">
              <label for="">Dépôts</label>
              <input type="number" step="0.00001" name="Dépôts" id="Dépôts" class="form-control" />
            </div>
            <div class="mb-3">
              <label for="">autre depot</label>
              <input type="number" step="0.00001" name="autre_depot" id="autre_depot" class="form-control" />
            </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" onclick="window.location.reload()" >Update Client</button>
          </div>
        </form>
      </div>
    </div>
  </div>

            
            </div>
   
  </div>
</div>

    </section>

    <script>
    const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");

    var j = 1;
    console.log(j);

    toggle.addEventListener("click", () => {
      sidebar.classList.toggle("close");
      if (j % 2 == 1) {
    
        const element1 = document.getElementById('hhhhh');
        element1.style.marginLeft = '50px';
        console.log(j);
      } else {
   
        const element1 = document.getElementById('hhhhh');
        element1.style.marginLeft = '-20px';
        console.log(j);
      }
       j= j + 1;
      console.log(j);
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
  <script>
    function add(a) {
    window.location.href = "user_histori?var1=" + a;
  }
  function deletet(e){
    window.location.href = "?var1=" + e;
    console.log(e)
  }
  </script>
</body>
</html>
