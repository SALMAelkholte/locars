<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

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
                    <h2 class="form-title">vous êtes particulier? remplissez ce formulaire! </h2>

                    <div class="form-textbox">
                        <label for="name">Email</label>
                        <input type="email" name="email" id="email" />
                    </div>

                    <div class="form-textbox">
                        <label for="pass">Mot de Passe</label>
                        <input type="password" name="pass" id="pass" />
                    </div>

                    <div class="form-textbox">
                        <label for="name">Nom</label>
                        <input type="text" name="nom" id="name" />
                    </div>

                    <div class="form-textbox">
                        <label for="name">Prenom</label>
                        <input type="text" name="prenom" id="name" />
                    </div>

                    <div class="form-textbox">
                        <label for="name">Numero de permis</label>
                        <input type="number" name="permis" id="name" />
                    </div>

                    <div class="form-textbox">
                        <label for="name">adresse</label>
                        <input type="text" name="adresse" id="name" />
                    </div>

                    <div class="form-textbox">
                        <label for="name">Telephone</label>
                        <input type="number" name="tel" id="name" />
                    </div>
            </div>
            <center>
                <div class="form-group">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>J'accepte toutes les déclarations <a href="#" class="term-service">des conditions d'utilisation</a></label>
                </div>
            </center>


            <div class="form-textbox">
                <input type="submit" id="submit" name="submitconnx" class="submit" value="Sign Up" />
            </div>
            </form>

            <p class="loginhere">
                vous etes deja inscrit?<a href="login.php"> Log in</a>
            </p>
        </div>
    </div>

    </div>
</body>

</html>