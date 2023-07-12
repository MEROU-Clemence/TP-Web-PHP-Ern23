<!-- rendu HTML du détail d'un jeu -->
<?php
function render_jeu_by_age($jeu)
{
?>
    <div class="d-flex flex-row flex-wrap align-self-center card m-2 grossir" style="width: 100%;">
        <div class="d-flex flex-row flex-wrap">
            <img class="jeu_image_path" src="../images/games/<?php echo $jeu['image_path'] ?>" alt="image de <?php echo $jeu['titre'] ?>" style="width: 9rem; height: 14rem;">
        </div>

        <div id="detail-container" class="d-flex flex-column col-lg-8">
            <div>
                <h5 class="detail_titre fs-5"><?php echo $jeu['titre'] ?></h5>
                <br>
                <p class="jeu_prix"><?php $prix = $jeu['prix'] / 100;
                                    if ($prix == 0) {
                                        echo "Gratuit";
                                    } else {
                                        echo number_format($prix, 2, ',', '.') . "€";
                                    } ?></p>
            </div>
            <br><br>
            <!-- lien vers les détails d'un jeu. -->
            <a href="../detail.php?rendu_jeu_age=<?php echo $jeu['id'] ?>" class="button-detail-bis">Voir détail</a>
        </div>
    </div>


<?php
};
