<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
if(isset ($_SESSION['email']))
{
    echo "vous etes connectés en tant que: " .$_SESSION['email'];
}
else{
    ?>

    <div class="main">

        <h1>LOCARS</h1>
        <div class="container">
            <div class="sign-up-content">
                <form method="POST" class="signup-form" action="connexion.php">
                    

                  <div class="form-textbox">
                        <label for="name">Email</label>
                        <input type="email" name="email" id="name" />
                    </div>

                   

                     <div class="form-textbox">
                        <label for="pass">Mot de Passe</label>
                        <input type="password" name="pass" id="pass" />
                    </div>
                    <a href="#" class="loginhere-link">Mot de passe oublié</a>
                  

                    <div class="form-textbox">
                        <input type="submit" name="submit" id="submit" class="submit" value="Log In" />
                    </div>
                </form>
                <p class="loginhere">
                    vous etes pas encore inscrit?
                </p>
<h2 class="form-title">Quel type d'utilisateurs êtes-vous?</h2>
                   <center> <div class="form-radio">
                        <input type="radio" name="member_level" value="newbie" id="newbie" checked="checked" />
                        <label for="newbie"><a href="http://localhost/locars/colorlib-regform-10/index-particulier.php">Particulier</a></label>

                        <input type="radio" name="member_level" value="average" id="average" />
                        <label for="average"><a href="http://localhost/locars/colorlib-regform-10/index-professionnel.php">professionnel</a></label>

                       
                    </div>
                
            </div>
        </div>

    </div> </center>
    <?php 
    }
    ?>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>