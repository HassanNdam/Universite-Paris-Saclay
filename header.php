<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo("name");?></title>
    <link rel="icon" href="<?php echo(get_template_directory_uri() . '/assets/favicone/favicon-u-prune.png') ?>"
        sizes="16x16 32x32 48x48 64x64">

    <?php wp_head(); ?>

</head>

<body>
    <?php

    $jobcontract = get_post_custom_values('job_contract')[0];
    $joblocation = get_post_custom_values('job_location')[0];
    $jobcategory = get_post_custom_values('job_category')[0];
    $jobbody = get_post_custom_values('job_body')[0];
    $jobbranch = get_post_custom_values('job_branch')[0];
    $joblink = get_post_custom_values('job_link')[0];

    ?>

    <header class="site-header">
        <nav
            class="container navbar navbar-default navbar-expand d-flex flex-column flex-md-row justify-content-between py-3">
            <a class="navbar-brand" title="Aller sur la page d'accueil" href="<?php echo get_site_url(); ?>">
                <img src="<?php echo get_template_directory_uri(). '/assets/logo/paris-saclay.png'?>"
                    alt="Logo Université Paris-Saclay" style="max-width:250px" class="img-fluid">
            </a>
            <div class="text-center mt-4 mt-lg-0 "> 
                <a href="#" target="_blank">
                    <button type="button" class="btn mobilite-btn" onclick="this.blur();">Mobilité interne</button>
                </a>
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
else :
    ?>
    <div class="position-relative  overflow-hidden header-image-post">
        <?php    image_post_change($joblocation); ?>
    </div>
    <?php
endif;
