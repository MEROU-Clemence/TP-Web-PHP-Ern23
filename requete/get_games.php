<?php
function get_all_games()
{

    // 1- penser à récupérer la connexion à la base de données avec le mot clé global
    global $connection; // $connection vient du gichier config.php

    // 2- écrire la requête SQL dans une variable
    $query = "SELECT `id`, `titre`, `prix`, `image_path` FROM jeu"; // Le fait de la mettre dans une variable est plus pratique à utiliser plus tard

    // 3- comme on a pas de paramètres, on peut directement exécuter la requête avec mysqli_query().
    $result = mysqli_query($connection, $query); // 1er paramètre: la connexion, 2ème paramètre: la requête.

    // 4- on passe le résultat dans un tableau associatif avec mysqli_fetch_assoc()
    while ($jeu = mysqli_fetch_assoc($result)) {
        // 5- maintenant dans la boucle, c'est ici qu'il faut faire le rendu HTML
        render_games($jeu);
    }
}

// TODO: fonction rendu du jeu. Prendre dans méthodo et BDD, faire vardump pour afficher et faire rendu HTML du truc dans un nouveau template