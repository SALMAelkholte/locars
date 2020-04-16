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

	<title>Reserver</title>

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
						Reserver
					</h1>

				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->



	<!-- Start contact-page Area -->
	<section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">

				<div class="col-lg-8">
					<form class="form-area " id="myForm" action="../model/mail.php" method="post" class="contact-form text-right">
						
							
							<div class="col-lg-6 form-group">
								<input name="name" placeholder="Entrer Votre Nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer Votre Nom'" class="common-input mb-20 form-control" required="" type="text">
                                
                                <input name="name" placeholder="Entrer Votre Prenom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer Votre Prenom'" class="common-input mb-20 form-control" required="" type="text">

								<input name="email" placeholder="Entrer votre Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer votre Email'" class="common-input mb-20 form-control" required="" type="email">

								<input name="subject" placeholder="Entrer les données de votre Carte bancaire" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer les données de votre Carte bancaire'" class="common-input mb-20 form-control" required="" type="text">
								<button class="primary-btn mt-20 text-white" style="float: right;">Reserver</button>

							</div>
						
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- End contact-page Area -->

	<?php include 'footer.html'; ?>

	
	<!-- START INCLUDE SCRIPT -->
	<script src="../outils/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="../outils/js/vendor/bootstrap.min.js"></script>
	<script src="../outils/js/main.js"></script>
	<!-- END SCRIPT -->

</body>

</html>