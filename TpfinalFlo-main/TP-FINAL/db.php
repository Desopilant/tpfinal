<?php

$server = "localhost";
$user = "root";
$pass = "root";
$database = "tpfinal";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
      die("erreur");

}

   
?>

// ICI DOIT APPARAITRE LA CONNECTION AVEC LA BASE DE DONNEES
   // ET LA GESTION DES ERREURS