<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo("name");?></title>
    <link rel="icon" href="<?php echo(get_template_directory_uri() . '/assets/favicone/favicon-u-prune.png') ?>"
        sizes="16x16 32x32 48x48 64x64">

    <?php
    include_once("data/inc-data-form.php");
    wp_head();
    ?>

</head>

<body>
    <?php

                // Recupération des custom fiels du poste

    $jobcontract = get_post_custom_values('job_contract')[0];
    $joblocation = get_post_custom_values('job_location')[0];
    $jobcategory = get_post_custom_values('job_category')[0];
    $jobbody = get_post_custom_values('job_body')[0];
    $jobbranch = get_post_custom_values('job_branch')[0];
    $joblink = get_post_custom_values('job_link')[0];

    ?>

    <header id="site-header">
        <nav
            class="container navbar navbar-default navbar-expand d-flex flex-column flex-md-row justify-content-between py-3">

            <div class="row align-items-center d-flex">
                <div class="col-lg-6 col-sm-12">
                    <a class="navbar-brand" title="Aller sur la page d'accueil" href="<?php echo get_site_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(). '/assets/logo/logo.png'?>"
                            alt="Logo Université Paris-Saclay" style="max-width:250px" class="img-fluid">
                    </a>
                </div>
                <?php if (is_front_page()): ?>
                <div class="col-lg-6 col-sm-12 text-center">
                    <span class="header-text-site text-muted">Recrutement</span>
                </div>
                <?php elseif(is_single()): ?>
                <div class="col-lg-6 col-sm-12 text-center">
                    <span class="header-text-site text-muted"><?= $joblocation == NULL ? '' : $joblocation  ?></span>
                </div>

                <?php else: endif;?>
            </div>
            <div class="text-center mt-4 mt-md-0">

                <!-- Button mobilité interne -->

                <button type="button" class="btn  mobilite-btn" onclick="this.blur();" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Mobilité interne
                </button>

                <!-- Fênetre texte mobilité -->

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header couleur1 text-white">
                                <h5 class="modal-title" id="exampleModalLabel">Canditature interne</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body mt-3">
                                <p class="fs-6 lh-lg">
                                    Vous êtes personnel de l'Université Paris Saclay (titulaire ou CDD) et vous
                                    souhaitez postuler sur une
                                    de nos offres?
                                </p>

                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-dark" data-bs-dismiss="modal">
                                    Fermer</button> -->
                                <a href="https://jobaffinity.fr/apply/8lh3u0sbbjde7wmzp6"
                                    class="text-uppercase fw-bold candidate-link " title="Candidater en interne"
                                    target="_blank">
                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Candidatez
                                        ici</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Candidature Spontanée -->

                <a href="https://jobaffinity.fr/apply/zpmce5gaejoh4tzlip" target="_blank" class="">
                    <button type="button" class="btn btn-primary espace-buton-center" onclick="this.blur();">
                        Candidature spontanée</button>
                </a>
            </div>
        </nav>
    </header>


    <?php

if (is_front_page()) :
    ?>
    <div class="position-relative  overflow-hidden header-image-home">
        <!-- header image    -->
    </div>

    <?php
elseif(is_single()):
    ?>
    <div class="position-relative  overflow-hidden header-image-post">
        <?php    image_post_change_location($joblocation); ?>

    </div>
    <?php
else:
    ?>

    <div class="row align-items-center justify-content-center header-job-search">
        <div class="col-md-5 text-white text-center">
            <h2 class="text-white search-result-text">Résultats de la recherche</h2>
            <i class="fa fa-arrow-down" aria-hidden="true"></i>
        </div>
    </div>
    <?php
endif;
    ?>