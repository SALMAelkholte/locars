<?php
session_start();
$nom = $_SESSION['user'];
if ($nom == null) {
	header('Location:login/login.php');
}
?>


<!DOCTYPE html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="UTF-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="../outils/css/main.css">

	<title>Equipe</title>

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
						Notre Equipe
					</h1>

				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start team Area -->
	<section class="team-area section-gap team-page-teams" id="team">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Equipe Experimenté</h1>

					</div>
				</div>
			</div>
			<div class="row justify-content-center d-flex align-items-center">


				<div class="col-md-3 single-team">
					<div class="thumb">
						<img style="height: 300px; border-radius:10px;" class="img-fluid" src="../outils/img/pages/t2.jpeg" alt="">
						<div class="align-items-center justify-content-center d-flex">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
					<div class="meta-text mt-30 text-center">
						<h4>Salma El kholte</h4>
						<p>Directrice des Projets</p>
					</div>
				</div>

				<div class="col-md-3 single-team">
					<div class="thumb">
						<img style="height: 300px; border-radius:10px;" class="img-fluid" src="../outils/img/pages/t1.jpg" alt="">
						<div class="align-items-center justify-content-center d-flex">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
					<div class="meta-text mt-30 text-center">
						<h4>Ayoub Hassani</h4>
						<p>Directeur Generale</p>
					</div>
				</div>

				<div class="col-md-3 single-team">
					<div class="thumb">
						<img style="height: 300px; border-radius:10px;" class="img-fluid" src="../outils/img/pages/t3.jpeg" alt="">
						<div class="align-items-center justify-content-center d-flex">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
					<div class="meta-text mt-30 text-center">
						<h4>Laila Lahlou</h4>
						<p>Directrice Marketing </p>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End team Area -->

	<?php include 'footer.html'; ?>
	<!-- START INCLUDE SCRIPT -->
	<script src="../outils/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="../outils/js/vendor/bootstrap.min.js"></script>
	<script src="../outils/js/main.js"></script>
	<!-- END SCRIPT -->
</body>

</html>