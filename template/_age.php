<!-- rendu HTML du détail d'un jeu -->
<?php
function render_jeu_by_age($jeu)
{
?>
    <div class="d-flex flex-row flex-wrap card m-2">
        <div class="col-lg-4">
            <img class="jeu_image_detail" src="../images/games/<?php echo $jeu['couverture'] ?>" alt="image de <?php echo $jeu['titre'] ?>">
        </div>

        <div id="detail-container" class="d-flex flex-column col-lg-8">
            <div>
                <h5 class="detail_titre"><?php echo $jeu['titre'] ?></h5>
                <p class="col-6 col-sm-8 col-md-12 descrip_detail"><strong>Synopsis: </strong><?php echo $jeu['description'] ?></p>
                <div class="d-flex flex-row">
                    <p class="date_sortie">Date de sortie: &nbsp;
                    <div class="chiffres_date"><?php $jeu['date_sortie'];
                                                $dateNew = new DateTime($jeu['date_sortie']);
                                                $dateFormatee = $dateNew->format('d/m/Y');
                                                echo $dateFormatee; ?></div>
                    </p>
                </div>
                <div class="d-flex flex-row">
                    <img class="age_image_path" src="../images/pegi/<?php echo $jeu['image_path'] ?>" alt="image de la limite d'âge" style="width: 3rem; height: 3rem;"> &nbsp;
                    <p class="age_limit">age: <?php echo $jeu['limitage'] ?>+</p>
                </div>
            </div>
        </div>
    </div>


<?php
};
