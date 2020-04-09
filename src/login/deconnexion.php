<?php        
session_start();
session_unset();
session_destroy();  
header('Location:login.php');// apres la destruction de la session on retourne a la page login
?>      