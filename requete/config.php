<?php
// on déclare nos constantes
define('DB_HOST', 'database');
define('DB_USER', 'admin');
define('DB_PASS', 'admin');
define('DB_NAME', 'toysstore');

// on crée la connexion à la base de données
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// si on a une erreur de connexion on affiche l'erreur
if (!$connection) {
    die("Erreur: " . mysqli_connect_error());
}

// echo 'Connexion réussie';
// forcer l'encodage en utf8
mysqli_set_charset($connection, "utf8");
