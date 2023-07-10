<?php

// ******
// fonction affichage tous les jeux sur page d'accueil
// ******
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

// ******
// fonction détails d'un jeu
// ******
function detail_games($jeu_id)
{

    // 1- penser à récupérer la connexion à la base de données avec le mot clé global
    global $connection; // $connection vient du gichier config.php

    // 2- écrire la requête SQL dans une variable
    $query = "SELECT jeu.`id`,
    jeu.`titre`,
    jeu.`image_path` AS couverture,
    jeu.`description`,
    jeu.`date_sortie`,
    ra.`image_path`,
    ra.`label` AS limitage,
    note.`note_media`,
    note.`note_utilisateur`
    FROM jeu
    INNER JOIN restriction_age AS ra
    ON jeu.age_id = ra.id
    INNER JOIN note 
    ON jeu.note_id = note.id
    WHERE jeu.id = $jeu_id;"; // Le fait de la mettre dans une variable est plus pratique à utiliser plus tard

    // 3- comme on a pas de paramètres, on peut directement exécuter la requête avec mysqli_query().
    $result = mysqli_query($connection, $query); // 1er paramètre: la connexion, 2ème paramètre: la requête.

    // 4- on passe le résultat dans un tableau associatif avec mysqli_fetch_assoc()
    while ($detail = mysqli_fetch_assoc($result)) {
        // 5- maintenant dans la boucle, c'est ici qu'il faut faire le rendu HTML
        render_detail($detail);
    }
}

// ******
// fonction affichage par sorte de console
// ******
function get_title_label($console_id)
{
    global $connection;
    // on crée la requête SQL
    if ($console_id == 0) {
?>
        <h1>Toutes nos consoles</h1>
        <?php
    } else {
        $query = "SELECT `label` FROM console WHERE `id` = ?";

        // on prépare la requête SQL
        if ($stmt = mysqli_prepare($connection, $query)) {
            // on doit binder les paramètres
            mysqli_stmt_bind_param($stmt, 'i', $brand_id);
            // on va exécuter la requête
            if (mysqli_stmt_execute($stmt)) {
                // on récupère le résultat de la requête
                $result = mysqli_stmt_get_result($stmt);
                // on vérifie qu'on a des résultats
                if (mysqli_num_rows($result) > 0) {
                    while ($console = mysqli_fetch_assoc($result)) {
                        // ici le rendu HTML d'un jouet
        ?>
                        <h1>Toutes nos consoles de cette sorte : <?php echo $console['label'] ?></h1>
                <?php
                    }
                }
            }
        }
    }
}

// ******
// fonction par label des consoles
// ******
function get_label_from_console($jeu_id)
{
    // 1- penser à récupérer la connexion à la base de données avec le mot clé global
    global $connection; // $connection vient du gichier config.php

    // 2- écrire la requête SQL dans une variable
    $query = "SELECT console.`id`, console.`label`
    FROM game_console
    INNER JOIN jeu
    ON jeu.id = game_console.jeu_id
    INNER JOIN console
    ON game_console.console_id = console.id
    WHERE jeu.id = $jeu_id";

    // 3- comme on a pas de paramètres, on peut directement exécuter la requête avec mysqli_query().
    $result = mysqli_query($connection, $query); // 1er paramètre: la connexion, 2ème paramètre: la requête.

    // 4- on passe le résultat dans un tableau associatif avec mysqli_fetch_assoc()
    while ($detail = mysqli_fetch_assoc($result)) {
        // 5- maintenant dans la boucle, c'est ici qu'il faut faire le rendu HTML
        render_label_from_console($detail);
    }
}

// ******
// fonction affichage tous les jeux par label
// ******
function get_all_games_by_label($console_id)
{
    // 1- penser à récupérer la connexion à la base de données avec le mot clé global
    global $connection; // $connection vient du fichier config.php

    // 2- écrire la requête SQL dans une variable
    $query = "SELECT jeu.`id`, jeu.`titre`, jeu.`prix`, jeu.`image_path`
              FROM jeu
              INNER JOIN game_console ON jeu.id = game_console.jeu_id
              WHERE game_console.console_id = $console_id";

    // 3- exécuter la requête SQL
    $result = mysqli_query($connection, $query);

    // 4- vérifier s'il y a des résultats
    if (mysqli_num_rows($result) > 0) {
        // 5- parcourir les résultats
        while ($jeu = mysqli_fetch_assoc($result)) {
            // 6- afficher le rendu HTML
            render_games($jeu);
        }
    } else {
        // Aucun jeu correspondant trouvé
        echo "<p>Aucun jeu correspondant trouvé</p>";
    }
}

// ******
// fonction pour le menu déroulant classé par sorte de console
// ******
function get_games_by_label()
{
    // 1- penser à récupérer la connexion à la base de données avec le mot clé global
    global $connection; // $connection vient du fichier config.php

    // 2- écrire la requête SQL dans une variable
    $query = "SELECT console.`id`, console.`label`, COUNT(console.`label`) AS NBlabel
    FROM game_console
    INNER JOIN console
    ON game_console.console_id = console.id
    GROUP BY console.`id`";

    // on exécute la requête
    if ($result = mysqli_query($connection, $query)) {
        // on vérifie si on a des résultats
        if (mysqli_num_rows($result) > 0) {
            // on parcours les résultats
            while ($console = mysqli_fetch_assoc($result)) { ?>
                <li class="bg-primary py-1 ps-3 custom-li">
                    <a class="nav-item text-light fw-bold menu-deroul" href="./label.php?console_id=<?php echo $console['id'] ?>">
                        <?php echo $console['label'] ?> (&nbsp;<?php echo $console['NBlabel'] ?>&nbsp;)
                    </a>
                </li>
<?php
            }
        }
    }
};
