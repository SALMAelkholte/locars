<?php
session_start();
$nom = $_SESSION['user'];
if ($nom == null) {
	header('Location:login/login.php');
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

	<title>about</title>
	<style type="text/css">
		.locars {
			border-radius: 10px;
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
						A PROPOS DE NOUS
					</h1>

				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start home-about Area -->
	<section class="home-about-area" id="about">
		<div class="container-fluid">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 no-padding home-about-left">
					<img class="img-fluid" src="../outils/img/about-img.jpg" alt="">
				</div>
				<div class="col-lg-6 no-padding home-about-right">
					<h1>A l’origine de Locars<br>
						Une culture et un travail acharné</h1>
					<p>
						<span></span>
					</p>
					<p>
						Locars, c’est l’histoire d’une réussite. Les principes qui nous guident depuis nos modestes débuts se fondent sur le sens de l’intégrité et l’honnêteté de chacun. Nous mettons un point d'honneur à faire vivre les zones et les communautés dans lesquelles nos points de vente sont présents. Nous attachons une grande importance au soin accordé à nos clients, comme s’ils faisaient partie de notre famille. En interne, nous avons à cœur de récompenser nos équipes pour leur investissement dans leur travail au quotidien. Cet engagement reste le même depuis les débuts de l’entreprise fondée en 1957.

						Aujourd’hui Enterprise est devenu un fournisseur important sur le marché de la location automobile au niveau international. Nous offrons à nos clients un service complet de locations de tous types de véhicules et utilitaires et sommes présents dans les principaux aéroports, gares et centres-villes. Enterprise appartient au groupe Enterprise Holdings, qui propose une offre complète de solutions de transports et de mobilité. Aujourd’hui plus importante société de location de véhicules au monde, Enterprise Holdings opère sous les marques Locars, National Car Rental et Alamo Rent A Car à travers plus de 10 000 agences réparties dans les aéroports, les gares ou les centres-villes de plus de 90 pays du monde. Avec plus de 2 millions de véhicules sur la route, nos clients peuvent compter sur nous partout où ils ont besoin de louer un véhicule. Qu’il s’agisse d’une voiture ou d’un utilitaire, pour une voiture de remplacement, un déplacement professionnel, un week-end ou des vacances, pour un jour, une semaine, un mois ou plus encore !

						Nous jouons un rôle actif en matière de développement durable pour que notre activité évolue dans le respect de notre environnement, mais également pour participer à la création d’un monde meilleur pour les générations à venir. Le poids d'Enterprise sur le marché nous permet de contribuer à l’innovation, de faire avancer la recherche et de tester des solutions guidées par les attentes du marché.
					</p>
					<a class="text-uppercase primary-btn" href="../index.php">get details</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End home-about Area -->

	<!-- Start feature Area -->
	<section class="feature-area section-gap" id="service">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-8 pb-40 header-text">
					<h1>Quels services nous offrons a nos clients</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<h4><span class="lnr lnr-user"></span>Techniciens Experts</h4>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<h4><span class="lnr lnr-phone"></span>Bon Support</h4>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<h4><span class="lnr lnr-bubble"></span>Avis Positives</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End feature Area -->

	<?php include 'footer.html'; ?>


	<!-- START INCLUDE SCRIPT -->
	<script src="../outils/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="../outils/js/vendor/bootstrap.min.js"></script>
	<script src="../outils/js/main.js"></script>
	<!-- END SCRIPT -->
</body>

</html>