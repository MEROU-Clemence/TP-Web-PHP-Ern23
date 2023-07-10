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

    </ul>
</nav>
<hr class="line-solo">
</div>