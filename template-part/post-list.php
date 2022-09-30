<!-- Listes des offres -->

<main class="container mt-5">
    <div class="row g-5 ">
        <div class="col-md-9">

            <?php
if(have_posts()) :

    while ($myquery->have_posts()) : $myquery->the_post();

        $post_number2 = 0;

        $jobcontract = get_post_custom_values('job_contract_type')[0];
        $joblocation = get_post_custom_values('job_location')[0];
        $jobcategory = get_post_custom_values('custom_categorie')[0];
        $jobbody = get_post_custom_values('custom_corps')[0];
        $jobbranch = get_post_custom_values('custom_bap')[0];
        $joblink = get_post_custom_values('job_link')[0];
        $jobaddress =  get_post_custom_values('job_address')[0]; 
        $job_town =  get_post_custom_values('job_town')[0]; 

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
                                <i class="fa fa-map-marker text-muted" aria-hidden="true"></i>
                                <?php  echo $joblocation == null ? 'PARIS-SACLAY' : $joblocation;  ?>
                            </div>
                            <div class="col-lg-6">
                                <i class="fa-sharp fa-solid fa-address-card text-muted"></i> <?php echo $jobcontract; ?>
                            </div>
                        </div>
                        <div class="row gx-3">
                            <?php if($jobbranch != null) : ?>
                            <div class="col-lg-6">
                                <i class="fa-solid fa-calendar-days text-muted"></i> <?php  echo $jobbranch; ?>
                            </div>
                            <?php else : endif; ?>
                            <?php if($jobcategory != null) : ?>
                            <div class="col-lg-6">
                                <i class="fa-solid fa-briefcase text-muted"></i> <?php echo $jobcategory; ?>
                            </div>
                            <?php else : endif; ?>
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