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
</head>
<body>

    <div class="main">

        <h1>LOCARS</h1>
        <div class="container">
            <div class="sign-up-content">
                <form method="POST" class="signup-form" action="confirmation-inscription.php" onsubmit="return verifier(this);">
                    <h2 class="form-title">vous êtes professionnel? remplissez ce formulaire! </h2>
         
                  <div class="form-textbox">
                        <label for="name">Email</label>
                        <input type="email" name="email" id="email" />
                    </div>

                   
                    <div class="form-textbox">
                        <label for="pass">Mot de passe</label>
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
                        <label for="permis">numero de permis</label>
                        <input type="number" name="permis" id="permis" />
                    </div>
                    <div class="form-textbox">
                        <label for="ste">Nom de la societé</label>
                        <input type="text" name="ste" id="ste" />
                    </div>
                    <div class="form-textbox">
                        <label for="siret">Siret</label>
                        <input type="number" name="siret" id="siret" />
                    </div>
                     <div class="form-textbox">
                        <label for="adresse">adresse</label>
                        <input type="text" name="adresse" id="adresse" />
                    </div>
                     <div class="form-textbox">
                        <label for="tel">Telephone</label>
                        <input type="number" name="tel" id="tel" />
                    </div>
                  </div>
                  <center><div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>
J'accepte toutes les déclarations  <a href="#" class="term-service">des conditions d'utilisation</a></label>
                    </div></center>

                    <div class="form-textbox">
                        <input type="submit" name="submit" id="submit" class="submit" value="Sign up" />
                    </div>
                </form>

                <p class="loginhere">
                    vous etes deja inscrit?<a href="http://localhost/locars/colorlib-regform-10/index.php"> Log in</a>
                </p>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>