<?php
session_start();
$nom = $_SESSION['user'];
$id_user = $_SESSION['id'];

if ($nom == null) {
	header('Location:login/login.php');
}
?>

<?php include('../gerer/connection.php'); ?>
<?php include('../gerer/listing.php'); ?>

<?php
if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$update = true;
	$record = $db->query("SELECT * FROM voiture WHERE idvoiture=$id");
	 if($record->num_rows == 1 ){
		$n = mysqli_fetch_array($record);
		$marque = $n['marque'];
		$model = $n['model'];
		$dispo_debut = $n['dispo_debut'];
		$dispo_fin = $n['dispo_fin'];
		$prixj = $n['prixj'];
		$couleur = $n['couleur'];
		$matricule = $n['matricule'];
		$boitev = $n['boite_vitesse'];
		$ville = $n['ville'];
		$image = $n['image_url'];
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="UTF-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../outils/css/style.css">
	<link rel="stylesheet" href="../outils/css/main.css">
	<title>gestion</title>
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
						Ma voiture
					</h1>

				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<?php if (isset($_SESSION['message'])) : ?>
		<div class="msg">
			<?php
			echo $_SESSION['message'];
			unset($_SESSION['message']);
			?>
		</div>

	<?php endif ?>
	<?php $results = mysqli_query($db, "SELECT * FROM voiture where user_iduser = $id_user"); ?>

	<div class="container" style="padding:10px; background-color: white; margin-top:10px;">
		<table id="ajouter" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>marque</th>
					<th>model</th>
					<th>Dispo_debut</th>
					<th>Dispo_fin</th>
					<th>Prix Journalier</th>
					<th>couleur</th>
					<th>Matricule</th>
					<th>boite vitesse</th>
					<th>ville</th>
					<th>image</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($row = mysqli_fetch_array($results)) { ?>
					<tr>
						<td><?php echo $row['marque']; ?></td>
						<td><?php echo $row['model']; ?></td>
						<td><?php echo $row['dispo_debut']; ?></td>
						<td><?php echo $row['dispo_fin']; ?></td>
						<td><?php echo $row['prixj']; ?></td>
						<td><?php echo $row['couleur']; ?></td>
						<td><?php echo $row['matricule']; ?></td>
						<td><?php echo $row['boite_vitesse']; ?></td>
						<td><?php echo $row['ville']; ?></td>
						<td><img src="../upload/<?php echo $row['image_url']; ?>" alt="image" height="80" width="80" /></td>
						<td>
							<a href="gestion.php?edit=<?php echo $row['idvoiture']; ?>" class="edit_btn">Edit</a>
							<a href="../gerer/gestion_voiture.php?del=<?php echo $row['idvoiture']; ?>" class="del_btn">Delete</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
			<tfoot>
				<tr>
					<th>marque</th>
					<th>model</th>
					<th>Dispo_debut</th>
					<th>Dispo_fin</th>
					<th>Prix Journalier</th>
					<th>couleur</th>
					<th>Matricule</th>
					<th>boite vitesse</th>
					<th>ville</th>
					<th>image</th>
					<th>Action</th>
				</tr>
			</tfoot>
		</table>
	</div>

	<form class="gestion" action="../gerer/gestion_voiture.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="idvoiture" value="<?php echo $id; ?>">

		<div class="input-group">
			<label>Marque</label>
			<input type="text" name="marque" value="<?php echo $marque; ?>">
		</div>

		<div class="input-group">
			<label>Model</label>
			<input type="text" name="model" value="<?php echo $model; ?>">
		</div>

		<div class="input-group">
			<label>Dispo_debut</label>
			<input type="date" name="dispo_debut" value="<?php echo $dispo_debut; ?>">
		</div>

		<div class="input-group">
			<label>Dispo_fin</label>
			<input type="date" name="dispo_fin" value="<?php echo $dispo_fin; ?>">
		</div>

		<div class="input-group">
			<label>Prix Journalier</label>
			<input type="text" name="prixj" value="<?php echo $prixj; ?>">
		</div>

		<div class="input-group">
			<label>couleur</label>
			<input type="text" name="couleur" value="<?php echo $couleur; ?>">
		</div>

		<div class="input-group">
			<label>Matricule</label>
			<input type="text" name="matricule" value="<?php echo $matricule; ?>">
		</div>

		<div class="input-group">
			<label>Boite vitesse</label>
			<input type="text" name="boitev" value="<?php echo $boitev; ?>">
		</div>

		<div class="input-group">
			<label>ville .:</label>
			<input type="text" name="ville" value="<?php echo $ville; ?>">
		</div>

		<div class="input-group">
			<label for="fileUpload">Image:</label>
			<input type="file" name="image" id="fileUpload" value="<?php echo $image; ?>"><br>
			<p><strong>Note:</strong> Seuls les formats .jpg, .jpeg,
		</div>

		<div class="input-group">
			<?php if ($update == true) : ?>
				<button class="btn" type="submit" name="valider" value="update"  style="background: #556B2F;">update</button>
			<?php else : ?>
				<button class="btn" type="submit" name="valider" value="save">save</button>
			<?php endif ?>
		</div>
	</form>

	<?php include 'footer.html'; ?>

	<!-- MDBootstrap Datatables  -->
	<script src="../outils/js/main.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#ajouter').DataTable();
		});
	</script>
	<!-- END SCRIPT -->
</body>

</html>