<?php
session_start();
$nom = $_SESSION['user'];
if ($nom == null) {
	header('Location:src/login/login.php');
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="UTF-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="assets/css/main.css">

	<title>Accueil</title>

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
					<a href="index.php"><img class="locars" src="assets/img/logo.jpg" alt="" title="" width=200px /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li><a href="index.php">Bonjour <?php echo "$nom"; ?>!</a></li>
						<li class="menu-active"><a href="index.php">accueil</a></li>
						<li><a href="src/about.php">À propos de nous</a></li>
						<li><a href="src/gestion.php">Ma voiture</a></li>

						<li><a href="src/team.php">notre équipe </a></li>

						<li><a href="src/contact.php">Contact</a></li>

						<li><a href="src/login/deconnexion.php">Deconnexion</a></li>
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
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-7 col-md-6 ">

					<h1 class="text-white text-uppercase">
						Une prestation de qualité pour votre location de véhicule
					</h1>
					<p class="pt-20 pb-20 text-white">
						Louer un véhicule avec Locars ce n’est pas simplement trouver le meilleur moyen de se rendre d’un point A à un point B. C’est une invitation au voyage, au volant d’un véhicule qui saura seconder toutes vos envies, vous permettant ainsi de profiter d’une expérience mémorable
					</p>

				</div>
				<div class="col-lg-5  col-md-6 header-right">

					<form class="form" role="form" action="cars.php" method="post" autocomplete="off">

						<div class="from-group">
							<input class="form-control txt-field" type="text" name="name" placeholder="ville">


						</div>
						<div class="form-group row">
							<div class="col-md-6 wrap-left">
								<div class="default-select" id="default-select">
											<select class=" form-control" class="form-control">
									<option value="" disabled selected hidden>Prix</option>
									<option value=" 1">0 €-50 €</option>
									<option value="1">50 €-100 €</option>
									<option value="1">100 €-150 €</option>
									<option value="1">+200 €</option>
									</select>
								</div>
							</div>
							<div class="col-md-6 wrap-right">
								<div class="input-group dates-wrap">
									<input id="datepicker" class="dates form-control" id="exampleAmount" placeholder="Debut" type="date">
									<div class="input-group-prepend">
										<span class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-6 wrap-left">
								<div class="default-select" id="default-select">
											<select class=" form-control">
									<option value="" disabled selected hidden>boite vitesse</option>
									<option value=" 1">manuel</option>
									<option value="1">auto</option>

									</select>
								</div>
							</div>
							<div class="col-md-6 wrap-right">
								<div class="input-group dates-wrap">
									<input id="datepicker2" class="dates form-control" id="exampleAmount" placeholder="Fin" type="date">
									<div class="input-group-prepend">
										<span class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
									</div>
								</div>
							</div>
						</div>
						<div class="from-group">
							<input class="form-control txt-field" type="text" name="name" placeholder="marque">
							<input class="form-control txt-field" type="text" name="email" placeholder="couleur">
							<input class="form-control txt-field" type="tel" name="phone" placeholder="modele">
						</div>
						<div class="form-group row">
							<div class="col-md-12">
								<button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase" name="rechercher">Rechercher</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<?php include 'src/footer.html'; ?>

	<!-- START INCLUDE SCRIPT -->
	<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="./assets/js/vendor/bootstrap.min.js"></script>
	<script src="./assets/js/main.js"></script>
	<!-- END SCRIPT -->
</body>

</html>