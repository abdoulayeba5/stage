
<?php require_once "controll_user.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Formulaire d'autentification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Formulaire d'autentification</h2>
                    <p class="text-center">autentifier avec votre email et mot de passe.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Addresse Email" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Mot De Passe" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">oublier le mot de passe ?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">tu n'as pas de compte? <a href="signup-user.php">Créer Un Compte</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>

