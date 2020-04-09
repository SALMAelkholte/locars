<?php

function getConnexion()
{
	$servername = "localhost";
	$username = "root";
	$data_base = "locars";
	$password = "root";

	$conn = new mysqli($servername, $username, $password, $data_base);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);// affiche error 
	}
	return $conn;
}

// ============================connecter================================ 
if ($_POST['submitconnx'] === 'Log In') {
	if (!empty($_POST['email'])  || !empty($_POST['pass'])) {
		$email = $_POST['email'];
		$password	= $_POST['pass'];
		test($email, $password);
	}
}

// =========================particulier===================================
elseif ($_POST['submitconnx'] === 'Sign Up') {
	if ($_POST['email'] || $_POST['pass'] || $_POST['nom'] || $_POST['prenom'] || $_POST['permis'] || $_POST['adresse'] || $_POST['tel']) {
		$email = $_POST['email'];
		$password = $_POST['pass'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$permis = $_POST['permis'];
		$adresse = $_POST['adresse'];
		$telephone = $_POST['tel'];

		$con = getConnexion();

		if ($insert = $con->prepare("INSERT INTO user(nom,prenom,password,email,adresse,numero_permis,telephone) VALUES (?,?,?,?,?,?,?)")) {
			$insert->bind_param('sssssis', $nom, $prenom, $password, $email, $adresse, $permis, $telephone);
			$insert->execute();


			$insert->close();
		}

		test($email, $password);
	}
}

// =========================pro===================================
elseif ($_POST['submitconnx'] === 'Sign up pro') {
	if (!empty( $_POST['email'] || $_POST['pass'] || $_POST['nom'] || $_POST['prenom'] || $_POST['permis'] || $_POST['ste'] || $_POST['siret'] || $_POST['adresse'] || $_POST['tel'])) {
		$email = $_POST['email'];
		$password = $_POST['pass'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$permis = $_POST['permis'];
		$nom_societe = $_POST['ste'];
		$siret = $_POST['siret'];
		$adresse = $_POST['adresse'];
		$telephone = $_POST['tel'];

		$con = getConnexion();

		if ($insert = $con->prepare("INSERT INTO user(nom, prenom, password, email, adresse, numero_permis, telephone, nom_societe, siret) VALUES (?,?,?,?,?,?,?,?,?)")) {
			$insert->bind_param('sssssissi', $nom, $prenom, $password, $email, $adresse, $permis, $telephone, $nom_societe, $siret);
			$insert->execute();

		

			$insert->close();
		}

		test($email, $password);
	}
}

function test($email, $password)
{
	$con = getConnexion();
	$stat = $con->query("SELECT * FROM user where email='$email' and password='$password'");

	if ($stat->num_rows > 0) {
		while ($row = $stat->fetch_assoc()) {// Retourne un tableau associatif qui correspond à la ligne récupérée ou NULL s'il n'y a plus de ligne
		{
			session_start();
			$_SESSION['user'] = $row['nom'];
			$_SESSION['id'] = $row['iduser'];
			header('Location:../../../index.php');
		}
	} else {
		header('Location:../login.php?test=0');//retourner a la page cnx 
	}
}