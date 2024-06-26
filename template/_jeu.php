<!-- rendu HTML des jeux sur page accueil -->
<?php
function render_games($jeu)
{ ?>

    <div class="d-flex flex-column align-items-center card-body">
        <div class="card m-2" <?php echo $jeu['id'] ?> style="width: 14rem;">
            <div class="d-flex flex-column card-body render-card">
                <img class="jeu_image_path" src="../images/games/<?php echo $jeu['image_path'] ?>" alt="image de <?php echo $jeu['titre'] ?>" style="width: 14rem; height: 20rem;">
                <h5 class="jeu_titre"><?php echo $jeu['titre'] ?></h5>
                <p class="jeu_prix"><?php $prix = $jeu['prix'] / 100;
                                    if ($prix == 0) {
                                        echo "Gratuit";
                                    } else {
                                        echo number_format($prix, 2, ',', '.') . "€";
                                    } ?></p>
            </div>
            <!-- lien vers les détails d'un jeu. -->
            <a href="../detail.php?rendu_jeu=<?php echo $jeu['id'] ?>" class="button-detail">Voir détail</a>
        </div>
    </div>

<?php }
?>