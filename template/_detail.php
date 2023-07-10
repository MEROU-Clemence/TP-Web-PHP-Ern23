<!-- rendu HTML du détail d'un jeu -->
<?php
function render_detail($detail)
{
?>
    <div class="d-flex flex-row flex-wrap card m-2">
        <div class="col-lg-4">
            <img class="jeu_image_detail" src="../images/games/<?php echo $detail['couverture'] ?>" alt="image de <?php echo $detail['titre'] ?>">
        </div>

        <div id="detail-container" class="d-flex flex-column col-lg-8">
            <div>
                <h5 class="detail_titre"><?php echo $detail['titre'] ?></h5>
                <?php get_label_from_console($detail['id']) ?>
                <p class="col-6 col-sm-8 col-md-12 descrip_detail"><strong>Synopsis: </strong><?php echo $detail['description'] ?></p>
                <div class="d-flex flex-row">
                    <p class="date_sortie">Date de sortie: &nbsp;
                    <div class="chiffres_date"><?php $detail['date_sortie'];
                                                $dateNew = new DateTime($detail['date_sortie']);
                                                $dateFormatee = $dateNew->format('d/m/Y');
                                                echo $dateFormatee; ?></div>
                    </p>
                </div>
                <div class="d-flex flex-row">
                    <img class="age_image_path" src="../images/pegi/<?php echo $detail['image_path'] ?>" alt="image de la limite d'âge" style="width: 3rem; height: 3rem;"> &nbsp;
                    <p class="age_limit">age: <?php echo $detail['limitage'] ?>+</p>
                </div>
            </div>
            <div class="d-flex flex-row flex-wrap justify-content-between pt-4">
                <div class="d-flex flex-row avis_precis">
                    ⭐<div class="d-flex flex-row hauteur_justify">Avis presse: &nbsp;
                        <div class="color_note"><?php echo $detail['note_media'] ?></div>/20
                    </div>
                </div>
                <div class="d-flex flex-row avis_precis">
                    ⭐<div class="d-flex flex-row hauteur_justify">Avis utilisateur: &nbsp;
                        <div class="color_note"><?php echo $detail['note_utilisateur'] ?></div>/20
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
};

// rendu HTML du label des consoles
function render_label_from_console($detail)
{
?>
    <span class="badge rounded-pill text-bg-primary"><?php echo $detail['label'] ?></span>
<?php
};
?>