<?php
// Connexion à la base de données 
$utilisateur = "root";
$serveur = "localhost";
//$motdepasse = "root";
$basededonnees = "sae3";

// Récupération des données du formulaire
$pwd = $_POST['pwd'];
$Mail_Uti = $_POST['mail'];


$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);
//check pwd procedure 
$requete = "SELECT Mail_Uti FROM utilisateur";
$Mail_Uti = $connexion->query($requete);

// Création de la session
session_start();

// Stockage de l'adresse mail dans la session
$_SESSION['Mail_Uti'] = $Mail_Uti;


// Fermeture de la connexion
$connexion->close();
header('Location: index.php');

?>