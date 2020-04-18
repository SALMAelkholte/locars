<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <title>Sign In </title>

    <!-- Main css -->
    <link rel="stylesheet" href="./outils/css/style.css">
</head>

<body>
    <script type="text/javascript">
function verifier() {
    var email = document.getElementById('email').value;
	var pass = document.getElementById('pass').value;
    if(email=="")
    {
         alert('un champ obligatoire doit etre saisi!');
        document.getElementById('email').focus ;
        return false;
             
    }
    else if(pass=="")
    {
         alert('un champ obligatoire doit etre saisi!');
        document.getElementById('pass').focus ;
	return false;
	}
	else
        return true;
}

</script>
    <div class="main">

        <h1>LOCARS</h1>
        <div class="container">
            <div class="sign-up-content">
                <form method="POST" class="signup-form" action="Traitement/model.php" onsubmit="return verifier(this);">
                    <div class="form-textbox">
                        <label for="name">Email</label>
                        <input type="email" name="email" id="email" />
                    </div>

                    <div class="form-textbox">
                        <label for="pass">Mot de Passe</label>
                        <input type="password" name="pass" id="pass" />
                    </div>
                    <a href="#" class="loginhere-link">Mot de passe oublié</a>

                    <div class="form-textbox">
                        <input type="submit" name="submitconnx" id="submit" class="submit" value="Log In" />
                    </div>
                </form>

                <p class="loginhere">
                    vous etes pas encore inscrit?
                </p>

                <h2 class="form-title">Quel type d'utilisateurs êtes-vous?</h2>

                <center>
                    <div class="form-radio">
                        <input type="radio" name="member_level" value="newbie" id="newbie" checked="checked" />
                        <label for="newbie"><a href="particulier.php">Particulier</a></label>

                        <input type="radio" name="member_level" value="average" id="average" />
                        <label for="average"><a href="professionnel.php">professionnel</a></label>
                    </div>
            </div>
        </div>

    </div>
    </center>
    
</body>

</html>