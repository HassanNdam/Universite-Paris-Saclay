<?php

require("search-engine.php");

require("data-connect.php");

get_template_part("data/inc-data", "");


?>

<!-- Offres trouvées  -->

<div class="container mt-5 ">
    <h5>Offres trouvées (<?= $post_number ?>)</h5>
</div>

<!-- Listes des offres -->

<main class="container mt-5">
    <div class="row g-5 ">
        <div class="col-md-9">

            <?php
if(have_posts()) :

    while ($myquery->have_posts()) : $myquery->the_post();

        $post_number2 = 0;

        $jobcontract = get_post_custom_values('job_contract')[0];
        $joblocation = get_post_custom_values('job_location')[0];
        $jobcategory = get_post_custom_values('job_category')[0];
        $jobbody = get_post_custom_values('job_boby')[0];
        $jobbranch = get_post_custom_values('job_branch')[0];

        $post_title = get_the_title($post);

        ?>

            <div class="row mb-2 ">
                <div class="row g-0 border overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

                    <?php changement_couleur_permutation($post_number, $post_title);?>
                    <div class="col-md-9 p-4 flex-column position-static ">

                        <div class="mb-3 text-muted fst-italic">
                            Publié le <?php echo get_the_date(); ?>
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-lg-6">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <?php  echo $joblocation == null ? 'PARIS-SACLAY' : $joblocation;  ?>
                            </div>
                            <div class="col-lg-6">
                                <i class="fa-sharp fa-solid fa-address-card"></i> <?php echo $jobcontract; ?>
                            </div>
                        </div>
                        <div class="row gx-3">
                            <div class="col-lg-6">
                                <i class="fa-solid fa-calendar-days"></i> <?php  echo $jobbranch; ?>
                            </div>
                            <div class="col-lg-6">
                                <i class="fa-solid fa-briefcase"></i> <?php echo $jobcategory; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 align-self-center text-center">
                        <a href="<?php the_permalink(); ?> ">
                            <button type="submit" class="btn btn-primary btn-offre" onclick="this.blur();">Voir
                                l'offre</button>
                        </a>
                    </div>
                </div>
            </div>


            <?php $post_number++ ; endwhile;
    wp_reset_postdata();

else: ?>
            <div class="container seach-not-found shadow-sm bg-light rounded-3 mt-5 mb-5 ">
                <div class="row justify-content-center mt-4">
                    <div class="col-lg-5 text-center">
                        <h4 class="not-found-post-text mt-3 mb-3">Oups ! Aucune offre ne correspond à votre recherche !
                        </h4>
                        <?php if(($_GET)) : ?>
                        <a class="back-to-offers-link mt-4" href="<?php echo get_site_url();?>"><i
                                class="fa fa-angle-left" aria-hidden="true"></i> Revenir à la liste des offres</a>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-2 text-center">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                    <div class="col-lg-5 text-center">
                        <h4 class="not-found-post-text mt-3 mb-3">Vous pouvez soummetre une candidature spontanée</h4>
                    </div>
                    <div class="row text-center">
                        <a class="mt-5" href="https://jobaffinity.fr/apply/zpmce5gaejoh4tzlip" target="_blank"
                            title="Soumettre une candidature spontanée">
                            <button type="button" class="btn btn-primary" onclick="this.blur();">Candidature
                                spontanée</button>
                        </a>
                    </div>
                </div>
            </div>
            <?php

endif;

?>

        </div>

        <!-- Filtre -->

        <div class="col-md-3 text-center box-shadow-lg">
            <h1 class="mb-5 mt-4 filtre">Lancer ma recherche</h1>
            <div class="position-sticky" style="top: 2rem;">
                <form methode="GET" action="" class="form-group">
                    <div class="input-group mb-5">
                        <input type="search" id="s" class="form-control" placeholder="MOTS-CLÉS" name="s"
                            value="<?php  echo $keyword; ?>">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>

                    <div class="mb-5">
                        <select name="category" class="form-select form-control" aria-label="Default select example">
                            <option value="0" <?php echo $category_value == 0 ? 'selected' : ''; ?>>Catégorie</option>
                            <?php 
                                 select_search_value(JOBCATEGORY);
                             ?>
                        </select>
                    </div>
                    <div class="mb-5">
                        <select name="contract" class="form-select form-control" aria-label="Default select example">
                            <option value="0" <?php if ($contract_value == 0) echo('selected'); ?>>Type de contrat
                            </option>
                            <?php 
                                  select_search_value(JOBCONTRACT);
                            ?>
                        </select>
                    </div>

                    <div class="mb-5">
                        <select name="branch" class="form-select form-control" aria-label="Default select example">
                            <option value="0" <?php if ($branch_value == 0) echo('selected'); ?>>BAP</option>
                            <?php 
                                select_search_value(JOBBRANCH);
                            ?>
                        </select>
                    </div>

                    <div class="mb-5">
                        <select name="body" class="form-select form-control" aria-label="Default select example">
                            <option <?php if ($body_value == 0) echo('selected'); ?>>Corps</option>
                            <?php 
                                select_search_value(JOBBODY);
                            ?>
                        </select>
                    </div>
                    <button type="button" onclick='window.location.reload(false)'
                        class="btn btn-dark">Rafraîchir</button>
                    <button type="submit" class="btn btn-primary" id="searchsubmit" onclick="this.blur();">Rechercher
                    </button>
                </form>

            </div>
        </div>
    </div>
    </div>

</main>

<div class="container d-flex align-items-center justify-content-center mt-5">
    <?php pagination_post();?>
</div>