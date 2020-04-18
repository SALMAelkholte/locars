<?php

session_start();

//connexion
function getConnexion()
{
    $conn = mysqli_connect('localhost', 'root', 'root', 'locars'); 
    return $conn;
}

//declaration des variables

$user_iduser =  $_SESSION['id'];
$idvoiture   =  $_POST['idvoiture'];
$marque      =  $_POST['marque'];
$model       =  $_POST['model'];
$dispo_debut =  $_POST['dispo_debut'];
$dispo_fin   =  $_POST['dispo_fin'];
$prixj       =  $_POST['prixj'];
$couleur     =  $_POST['couleur'];
$matricule   =  $_POST['matricule'];
$boitev      =  $_POST['boitev'];
$ville       =  $_POST['ville'];
$image = getUrlImage();



//ajouter

if ($_POST['valider'] === 'save') {
    if (!empty($idvoiture || $marque || $model || $image || $nomv || $kilometrage || $dispo_debut || $dispo_fin || $prixj || $couleur || $matricule || $boitev || $ville)) {
        $con = getConnexion();

        $sql = "INSERT INTO voiture (user_iduser, marque, dispo_debut, dispo_fin, prixj, model, couleur, boite_vitesse, matricule, image_url, ville) VALUES ($user_iduser, '$marque', '$dispo_debut', '$dispo_fin', '$prixj', '$model', '$couleur', '$boitev', '$matricule', '$image', '$ville')";

        if ($con->query($sql) === TRUE) {
            header('Location:../src/gestion.php');
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }

        $con->close();
    }
    
//update
    
} elseif ($_POST['valider'] === 'update') {
    if (!empty($idvoiture || $marque || $model || $image || $dispo_debut || $dispo_fin || $prixj || $couleur || $matricule || $boitev || $ville)) {
        $con = getConnexion();

        $sql = "UPDATE voiture SET marque = '$marque', dispo_debut = '$dispo_debut', dispo_fin = '$dispo_fin', prixj = $prixj, model = '$model', couleur =  '$couleur', boite_vitesse = '$boitev', matricule = '$matricule', image_url = '$image', ville = '$ville' WHERE idvoiture=$idvoiture";

        if ($con->query($sql) === TRUE) {
            header('Location:../src/gestion.php');
        } else {
            echo "Error updating record: " . $con->error;
        }

        $con->close();
    }
}

//image

function getUrlImage()
{
    if (!empty($_FILES)) {
        $file_name = $_FILES['image']['name']; // nom du fichier
        $file_extension = strrchr($file_name, "."); // trouver l'extension du fichier (prendre ce qui est apres le point)
        $file_tmp_name =  $_FILES['image']['tmp_name']; //source du fichier
        $file_dest = '../upload/' . $file_name; //destination du fichier
        $extension_valide = array('.jpg', '.jpeg', '.png'); //declaration des extensions valides

        if (in_array($file_extension, $extension_valide)) { // verifier si l'extension du fichier choisi est valide
            if (move_uploaded_file($file_tmp_name, $file_dest)) { // deplacer le fichier telechargé au destination
                return $file_dest;
            } else {
                echo "bad request";
            }
        } else {
            echo "pas autorisé"; //si l'extension n'est pas valide
        }
    }
}

//delete

if (isset($_GET['del'])) {
    $id_voiture = $_GET['del'];
    $con = getConnexion();

    $sql = "DELETE FROM voiture WHERE idvoiture= $id_voiture";

    if ($con->query($sql) === TRUE) {
        header('Location:../src/gestion.php');
    } else {
        echo "Erreur de suppression " . $con->error;
    }

    $con->close();
}
