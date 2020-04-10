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


if (isset($_POST['save'])) {

	if (isset($_FILES['image'])) {
		$errors = array();
		$file_name = $_FILES['image']['name'];
		$file_size = $_FILES['image']['size'];
		$file_tmp = $_FILES['image']['tmp_name'];
		$file_type = $_FILES['image']['type'];
		$file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));

		$extensions = array("jpeg", "jpg", "png");

		if (in_array($file_ext, $extensions) === false) {
			$errors[] = "extension not allowed, please choose a JPEG or PNG file.";
		}

		if ($file_size > 2097152) {
			$errors[] = 'File size must be excately 2 MB';
		}

		if (empty($errors) == true) {
			move_uploaded_file($file_tmp, "upload/" . $file_name);
			//echo "Success";
		} else {
			print_r($errors);
		}

		$image = $file_name;
		$marque = $_POST['marque'];
		$model = $_POST['model'];
		$dispo_debut = $_POST['dispo_debut'];
		$dispo_fin = $_POST['dispo_fin'];
		$prixj = $_POST['prixj'];
		$couleur = $_POST['couleur'];
		$matricule = $_POST['matricule'];
		$boitev = $_POST['boitev'];
		$ville = $_POST['ville'];

		$sql = "INSERT INTO voiture (marque, model, dispo_debut, dispo_fin, prixJ, couleur, Matricule, boite_vitesse, ville, image) VALUES ('$marque', '$model', '$dispo_debut','$dispo_fin' , '$prixj', '$couleur', '$matricule', '$boitev', '$ville','$image')";

		if (mysqli_query($db, $sql)) {

			$_SESSION['message'] = "model saved";
			header('location: gestion.php');
		} else {
			die("erreur : " . $sql);
		}
		//mysqli_query($db, "INSERT INTO voiture (marque, model, dispo, prixJ, couleur, Matricule, boite_vitesse, ville, image) VALUES ('$marque', '$model', '$dispo', '$prixj', '$couleur', '$matricule', '$boitev', '$ville')"); 
	}
}

    
/*
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
?>
*/
