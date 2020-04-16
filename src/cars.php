<?php
// session de lutilisatur 
session_start();
$nom = $_SESSION['user'];
if ($nom == null) {
	header('Location:login/login.php');
}
// connexion base de données 
$db = mysqli_connect('localhost', 'root', 'root', 'locars');

//preparation de la requête ( pour la preparation de la requette on initialise les variable a 0)
$sql = "SELECT * from voiture ";
$ville = 0;
$marque = 0;
$model = 0;
$couleur = 0;
$boite_vitesse = 0;
$date_debut = 0;
$date_fin = 0;
$prixj = 0;

//ville

if($_GET['ville'] && $marque==0 && $model ==0 && $couleur==0 && $boite_vitesse==0 && $date_debut==0 && $date_fin==0 && $prixj==0){
    $ville++; //l'objectif de cette incrementation est de donner a la variable ville une valeur différente de zero =1 : le champs est déja rempli par l'utilisateur 
    $sql = $sql."WHERE ville='".$_GET['ville']."'";
}
    
//marque
if($_GET['marque'] && $ville==0  && $model ==0 && $couleur==0 && $boite_vitesse==0 && $date_debut==0 && $date_fin==0 && $prixj==0){
        $sql = $sql."WHERE marque='".$_GET['marque']."'";
        $marque++;    
}
if(($ville!=0 || $model!=0 || $couleur!=0 || $boite_vitesse!=0 || $date_debut!=0 || $date_fin!=0 || $prixj!=0) && $_GET['marque']){
        $sql = $sql." AND marque='".$_GET['marque']."'"; // au cas ou un autre champ est rempli pour pouvoir respecter tout les choix de l'utilisateur 
        $marque++;
    }

//modele
if($_GET['model'] && $ville==0 && $marque==0 && $couleur==0 && $boite_vitesse==0 && $date_debut==0 && $date_fin==0 && $prixj==0){
        $sql = $sql."WHERE model='".$_GET['model']."'";
        $model++;
}
if(($ville!=0 || $marque!=0 || $couleur!=0 || $boite_vitesse!=0 || $date_debut!=0 || $date_fin!=0 || $prixj!=0)  && $_GET['model']){
        $sql = $sql." AND model='".$_GET['model']."'"; //same 
    }
/* ---------couleur------------- */

if($_GET['couleur'] && $ville==0 && $marque==0 && $model==0 && $boite_vitesse==0 && $date_debut==0 && $date_fin==0 && $prixj==0){
        $sql = $sql."WHERE couleur='".$_GET['couleur']."'";
        $couleur++;
}
if(($ville!=0 || $marque!=0 || $model!=0 || $boite_vitesse!=0 || $date_debut!=0 || $date_fin!=0 || $prixj!=0) && $_GET['couleur']){
        $sql = $sql." AND couleur='".$_GET['couleur']."'";
    }

/* ---------boite_vitesse-----------*/

if($_GET['boite_vitesse'] && $ville==0 && $marque==0 && $model==0 && $couleur==0 && $date_debut==0 && $date_fin==0 && $prixj==0){
        $sql = $sql."WHERE boite_vitesse='".$_GET['boite_vitesse']."'";
        $boite_vitesse++;
}
if(($ville!=0 || $marque!=0 || $model!=0 || $couleur!=0 | $date_debut!=0 || $date_fin!=0 || $prixj!=0 ) && $_GET['boite_vitesse']){
        $sql = $sql." AND boite_vitesse='".$_GET['boite_vitesse']."'";
    }

/* ---------date_debut----------- */

if($_GET['dispo_debut'] && $ville==0 && $marque==0 && $model==0 && $couleur==0 && $boite_vitesse==0 && $date_fin==0 && $prixj==0){
        $sql = $sql."WHERE dispo_debut <= '".$_GET['dispo_debut']."' and '".$_GET['dispo_debut']."' <= dispo_fin"; // on compare avec les disponibilités que l'utilisateur a choisi : le dispo debut de la base de données doit etre plus petit que celui de l'utilisateur a choisi et aussi celui de l'utilisateur doit etre plus petit que la date de fin de la base de données 
        $date_debut++;
}
if(($ville!=0 || $marque!=0 || $model!=0 || $couleur!=0 || $boite_vitesse!=0 || $date_fin!=0 || $prixj!=0) && $_GET['dispo_debut']){
        $sql = $sql." AND dispo_debut <= '".$_GET['dispo_debut']."' and '".$_GET['dispo_debut']."' <= dispo_fin";
    }
/* ---------date_fin------------- */

if($_GET['dispo_fin'] && $ville==0 && $marque==0 && $model==0 && $couleur==0 && $boite_vitesse==0 && $date_debut==0 && $prixj==0){
        $sql = $sql."WHERE dispo_debut >= '".$_GET['dispo_fin']."' and '".$_GET['dispo_fin']."' <= dispo_fin";
        $date_fin++;
}
if(($ville!=0 || $marque!=0 || $model!=0 || $couleur!=0 || $boite_vitesse!=0 || $date_debut!=0 || $prixj!=0) && $_GET['dispo_fin']){
        $sql = $sql." AND dispo_debut >= '".$_GET['dispo_fin']."' and '".$_GET['dispo_fin']."' <= dispo_fin";
    }

/* ---------prix------------- */
 
    $val = $_GET['prixj'];
    if ($val == 1){
        $prix_min = 0;
        $prix_max = 50;
    }
    elseif ($val == 2){
        $prix_min = 50;
        $prix_max = 100;
    }
    elseif ($val== 3){
        $prix_min = 100;
        $prix_max = 150;
    }
    elseif ($val== 4){
        $prix_min = 150;
        $prix_max = 200;
    }
    elseif ($val == 5){
        $prix_min = 200;
        $prix_max = 10000;
    } 
    //dans cette boucle on donne des valeurs des  prix qu'on avait donné dans la page index dans (option)

if($_GET['prixj'] && $ville==0 && $marque==0 && $model==0 && $couleur==0 && $boite_vitesse==0 && $date_debut==0 && $date_fin==0){
    
        $sql = $sql."WHERE prixj BETWEEN ".$prix_min." AND ".$prix_max;
        $prixj++;
}
if(($ville!=0 || $marque!=0 || $model!=0 || $couleur!=0 || $boite_vitesse!=0 || $date_debut!=0 || $date_fin!=0) && $_GET['prixj']){
        $sql = $sql." AND prixj BETWEEN ".$prix_min." AND ".$prix_max;
    }



?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="UTF-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="../outils/css/main.css">

	<title>cars</title>

	<style type="text/css">
		.locars {
			border-radius: 10px;
		}
        .rating {
			width: 226px;
			margin: 0 auto 1em;
			font-size: 45px;
			overflow:hidden;
            
		}
		.rating a {
			float:right;
			color: #aaa;
			text-decoration: none;
			-webkit-transition: color .4s;
			-moz-transition: color .4s;
			-o-transition: color .4s;
			transition: color .4s;
		}
		.rating a:hover,
		.rating a:hover ~ a,
		.rating a:focus,
		.rating a:focus ~ a		{
			color: orange;
			cursor: pointer;
		}
	</style>
</head>

<body>

	<header id="header" id="home">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="../index.php"><img class="locars" src="../outils/img/logo.jpg" alt="" title="" width=200px /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li><a href="../index.php">Bonjour <?php echo "$nom"; ?>!</a></li>
						<li class="menu-active"><a href="../index.php">accueil</a></li>
						<li><a href="about.php">À propos de nous</a></li>
						<li><a href="gestion.php">Ma voiture</a></li>
						<li><a href="team.php">notre équipe </a></li>
						<li><a href="contact.php">Contact</a></li>

						<li><a href="login/deconnexion.php">Deconnexion</a></li>
					</ul>
				</nav>
				<!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->

	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Voitures Disponibles
					</h1>

				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start model Area -->
	<section class="model-area section-gap" id="cars">
		<div class="container">
			<div class="row d-flex justify-content-center pb-40">
				<div class="col-md-8 pb-40 header-text">
					<h1 class="text-center pb-10">Choisir ta voiture Preferée</h1>

				</div>
			</div>
			<div class="active-model-carusel">
                <?php
                    $result = mysqli_query($db, $sql);
                    while($colonne = mysqli_fetch_array($result)){
                ?>
				<div class="row align-items-center single-model item">
					<div class="col-lg-6 model-left">
						<div class="title justify-content-between d-flex">
							<h4 class="mt-20"><?php echo $colonne['marque']; ?></h4>
							<h2><?php echo $colonne['prixj']; ?><span>/day</span></h2> 
						</div>
						
						<p>
                             <?php echo $colonne['nomv']; ?> <br>
							boite vitesse : <?php echo $colonne['boite_vitesse']; ?> <br>
							couleur : <?php echo $colonne['couleur']; ?><br>
							model: <?php echo $colonne['model']; ?> <br>
                            Kilometrage: <?php echo $colonne['kilometrage']; ?> <br>
                            ville: <?php echo $colonne['ville']; ?> <br>  
							
						</p>
						<a class="text-uppercase primary-btn" href="reserver.php">Reserver</a>
					</div>
					<div class="col-lg-6 model-right">
                        <img class="img-fluid" src="<?php echo $colonne['image_url']; ?>" alt="" height="200px" width="200px">
					</div>
                    <div class="rating"><!--
		--><a href="#5" title="Give 5 stars">☆</a><!--
		--><a href="#4" title="Give 4 stars">☆</a><!--
		--><a href="#3" title="Give 3 stars">☆</a><!--
		--><a href="#2" title="Give 2 stars">☆</a><!--
		--><a href="#1" title="Give 1 star">☆</a>
	</div>
            
				</div>
                    
                <?php
                    }//fin boucle affichage données
                ?>
                
				
			</div>
		</div>
	</section>
	<!-- End model Area -->


	<?php include 'footer.html'; ?>
	<!-- START INCLUDE SCRIPT -->
	<script src="../outils/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="../outils/js/vendor/bootstrap.min.js"></script>
	<script src="../outils/js/main.js"></script>
	<!-- END SCRIPT -->
</body>

</html>