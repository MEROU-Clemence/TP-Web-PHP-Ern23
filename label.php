<?php require_once './requete/config.php' ?>
<?php require_once './requete/get_games.php' ?>

<?php require_once './template/_header.php' ?>
<?php require_once './template/_navbar.php' ?>

<?php require_once './template/_jeu.php' ?>

<?php
if (isset($_GET['console_id'])) {
    $console_id = intval($_GET['console_id']);
    get_title_label($console_id);
    echo "<div class='d-flex flex-wrap justify-content-center align-self-center main-games'>";
    get_all_games_by_label($console_id);
    echo "</div>";
} else {
    echo "<div class='d-flex flex-wrap justify-content-center align-self-center main-games'>";
    get_title_label(0);
    echo "<div class='d-flex flex-wrap justify-content-center align-self-center main-games'>";
    get_all_games();
    echo "</div>";
}


?>

<?php require_once './template/_footer.php' ?>