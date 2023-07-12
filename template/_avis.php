<!-- rendu HTML du détail d'un jeu -->
<?php
function render_avis_presse($jeu)
{
?>
    <div class="d-flex flex-row flex-wrap card m-2 grossir">
        <div class="col-lg-4">
            <img class="jeu_image_detail" src="../images/games/<?php echo $jeu['couverture'] ?>" alt="image de <?php echo $jeu['titre'] ?>" style="width: 9rem; height: 14rem;">
        </div>

        <div id="detail-container" class="d-flex flex-column col-lg-8">
            <div>
                <h5 class="detail_titre"><?php echo $jeu['titre'] ?></h5>
            </div>
            <div class="d-flex flex-row flex-wrap justify-content-between pt-4">
                <div class="d-flex flex-row fs-4 avis_precis">
                    ⭐<div class="d-flex flex-row fs-4 hauteur_justify">Avis presse: &nbsp;
                        <div class="color_note fs-4"><?php echo $jeu['note_media'] ?></div>/20
                    </div>
                </div>
                <br><br>
                <div class="d-flex flex-row avis_precis">
                    ⭐<div class="d-flex flex-row hauteur_justify">Avis utilisateurs: &nbsp;
                        <div class="color_note"><?php echo $jeu['note_utilisateur'] ?></div>/20
                    </div>
                </div>
            </div>
            <br>
            <a href="../detail.php?rendu_jeu=<?php echo $jeu['id'] ?>" class="button-detail">Voir détail</a>
        </div>
    </div>


<?php
};

?>

<!-- rendu HTML du détail d'un jeu -->
<?php
function render_avis_utilisateurs($jeu)
{
?>
    <div class="d-flex flex-row flex-wrap card m-2 grossir">
        <div class="col-lg-4">
            <img class="jeu_image_detail" src="../images/games/<?php echo $jeu['couverture'] ?>" alt="image de <?php echo $jeu['titre'] ?>" style="width: 9rem; height: 14rem;">
        </div>

        <div id="detail-container" class="d-flex flex-column col-lg-8">
            <div>
                <h5 class="detail_titre"><?php echo $jeu['titre'] ?></h5>
            </div>
            <div class="d-flex flex-row flex-wrap justify-content-between pt-4">
                <div class="d-flex flex-row fs-4 avis_precis">
                    ⭐<div class="d-flex flex-row fs-4 hauteur_justify">Avis utilisateurs: &nbsp;
                        <div class="color_note fs-4"><?php echo $jeu['note_utilisateur'] ?></div>/20
                    </div>
                </div>
                <br><br>
                <div class="d-flex flex-row avis_precis">
                    ⭐<div class="d-flex flex-row hauteur_justify">Avis presse: &nbsp;
                        <div class="color_note"><?php echo $jeu['note_media'] ?></div>/20
                    </div>
                </div>
            </div>
            <br>
            <a href="../detail.php?rendu_jeu=<?php echo $jeu['id'] ?>" class="button-detail">Voir détail</a>
        </div>
    </div>


<?php
};
