<nav class="navbar navbar-expand-lg navbar-light nav-style">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item button-games">
            <a class="nav-link color-whrite1" aria-current="page" href="../index.php">Tous les jeux</a>
        </li>
        <li class="nav-item dropdown button-console">
            <a class="nav-link dropdown-toggle color-whrite2" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Par console</a>
            <ul class="dropdown-menu p-0 custom-ul">
                <?php get_games_by_label() ?>
            </ul>
        </li>
        <li class="nav-item dropdown button-console">
            <a class="nav-link dropdown-toggle color-whrite2" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Par prix</a>
            <ul class="dropdown-menu p-0 custom-ul">
                <li class="new-li"><a href="../prixcroissant.php">Prix croissant</a></li>
                <li class="new-li"><a href="../prixdecroissant.php">Prix décroissant</li>
            </ul>
        </li>
        <li class="nav-item dropdown button-console">
            <a class="nav-link dropdown-toggle color-whrite2" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Par notes</a>
            <ul class="dropdown-menu p-0 custom-ul">
                <li class="new-li"><a href="../gamepresse.php">Presse</li>
                <li class="new-li"><a href="../gameutilisateurs.php">Utilisateurs</li>
            </ul>
        </li>
        <li class="nav-item dropdown button-console">
            <a class="nav-link dropdown-toggle color-whrite2" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Filtrer ages</a>
            <ul class="dropdown-menu p-0 custom-ul">
                <?php get_games_by_age()
                ?>
            </ul>
        </li>

    </ul>
</nav>
<hr class="line-solo">
</div>