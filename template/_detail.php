<!-- rendu HTML du détail d'un jeu -->
<?php
function render_detail($detail)
{
?>
    <div class="d-flex flex-row card m-2 complet_detail_container">
        <div>
            <img class="jeu_image_path" src="../images/games/<?php echo $detail['couverture'] ?>" alt="image de <?php echo $detail['titre'] ?>" style="width: 15rem; height: 25rem;">
        </div>

        <div id="detail-container">
            <div>
                <h5 class="detail_titre"><?php echo $detail['titre'] ?></h5>
                <p class="sort_console"><?php echo $detail['label'] ?></p>
                <p class="descrip_detail"><strong>Synopsis: </strong><?php echo $detail['description'] ?></p>
                <div class="d-flex flex-row">
                    <p class="date_sortie">Date de sortie: &nbsp;
                    <div class="chiffres_date"><?php echo $detail['date_sortie'] ?></div>
                    </p>
                </div>
                <div class="d-flex flex-row">
                    <img class="age_image_path" src="../images/pegi/<?php echo $detail['image_path'] ?>" alt="image de la limite d'âge" style="width: 3rem; height: 3rem;"> &nbsp;
                    <p class="age_limit">age: <?php echo $detail['limitage'] ?>+</p>
                </div>
            </div>
            <div class="d-flex flex-row">
                <p>⭐Avis presse: <?php echo $detail['note_media'] ?>/20</p>
                <p>⭐Avis utilisateur: <?php echo $detail['note_utilisateur'] ?>/20</p>
            </div>
        </div>
    </div>


<?php
};


?>