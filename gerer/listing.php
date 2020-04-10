<?php
//session_start();
$db = mysqli_connect('localhost', 'root', 'root', 'locars');

// initialize variables
$marque = "";
$model = "";
$dispo = "";
$prixj = "";
$couleur = "";
$matricule = "";
$boitev = "";
$ville = "";
$id = 0;
$update = false;



//.. modify

if (isset($_POST['update'])) {
	$id = $_POST['idvoiture'];
	$marque = $_POST['marque'];
	$model = $_POST['model'];
	$dispo_debut = $_POST['dispo_debut'];
	$dispo_fin = $_POST['dispo_fin'];
	$prixj = $_POST['prixj'];
	$couleur = $_POST['couleur'];
	$matricule = $_POST['matricule'];
	$boitev = $_POST['boitev'];
	$ville = $_POST['ville'];
	$image = $_POST['image'];

	mysqli_query($db, "UPDATE voiture SET marque='$marque', model='$model', dispo_debut='$dispo_debut', dispo_fin='$dispo_fin', prixJ='$prixj', couleur='$couleur', Matricule='$matricule', boite_vitesse='$boitev', ville='$ville', image='$image' WHERE idvoiture=$id");
	//die("UPDATE voiture SET marque='$marque', model='$model' WHERE idvoiture=$id");
	$_SESSION['message'] = "model updated!";
	header('location: gestion.php');
}

//.. delete
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM voiture WHERE idvoiture=$id");
	$_SESSION['message'] = "model deleted!";
	header('location: gestion.php');
}
