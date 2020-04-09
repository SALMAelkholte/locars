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
    <div class="main">
        <h1>LOCARS</h1>
        <div class="container">
            <div class="sign-up-content">
                <form method="POST" class="signup-form" action="Traitement/model.php">
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
            <center>
                <div class="form-group">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>
                        J'accepte toutes les déclarations <a href="#" class="term-service">des conditions d'utilisation</a></label>
                </div>
            </center>

            <div class="form-textbox">
                <input type="submit" name="submitconnx" id="submit" class="submit" value="Sign up pro" />
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