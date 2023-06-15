<?php require_once "controll_creer_compte.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="controll_creer_compte.php" method="POST" autocomplete="">
                    <h2 class="text-center">Formulaire d'Authentification</h2>
                    <p class="text-center">c'est trés rapide et facil.</p>
                    <?php
                    if(count($eureurs) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($eureurs as $eureur){
                                echo $eureur;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($eureurs) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($eureurs as $eureur){
                                ?>
                                <li><?php echo $eureur; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="nom" placeholder="Nom" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Addresse Email" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirmmer le Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="creer_c">
                    </div>
                    <div class="link login-link text-center">Vous Avez un compte? <a href="login-user.php">se connecter ici</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>