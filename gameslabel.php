<?php require_once './requete/config.php' ?>
<?php require_once './requete/get_games.php' ?>

<?php require_once './template/_header.php' ?>
<?php require_once './template/_navbar.php' ?>

<?php require_once './template/_jeu.php' ?>

<?php
// on regarder si on a une valeur postée
// si c'est vide, on lui donne la valeur 0
// sinon on lui donne la valeur de $_POST['brand']
$console_id = empty($_POST) ? 0 : $_POST['console'];
get_all_games_by_label($console_id);
?>

<!-- appeler la fonction qui fait la requête sql pour récupérer les jeux -->
<div class="d-flex flex-wrap justify-content-center align-self-center">
    <?php
    get_all_games($console_id);
    ?>
</div>

<?php require_once './template/_footer.php' ?>