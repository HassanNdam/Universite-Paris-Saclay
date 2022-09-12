<?php

$jobcontract = get_post_custom_values('job_contract')[0];
$joblocation = get_post_custom_values('job_location')[0];
$jobcategory = get_post_custom_values('job_category')[0];
$jobbody = get_post_custom_values('job_body')[0];
$jobbranch = get_post_custom_values('job_branch')[0];
$joblink = get_post_custom_values('job_link')[0];

?>


<!-- Fil d'ariane  -->


<div class="container mt-5 mb-5 bg-light p-1 bloc-fil-ariane">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home" aria-hidden="true"></i> <a
                    href="<?php echo get_site_url();?>">Accueil</a></li>
            <li class="breadcrumb-item " aria-current="page">Nos offres</li>
            <li class="breadcrumb-item active"><?php echo the_title_attribute();?></li>
        </ol>
    </nav>
</div>


<!-- Affiche offre  -->


<div class="container mt-5">
    <div class="row g-5">
        <div class="col-md-8">
            <div class="row mb-2">
                <div class="row g-0 overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col-md-10 p-4 flex-column position-static ">
                        <?php the_content(); ?>
                    </div>

                    <div class="text-center mb-5">
                        <a href="<?php echo $joblink; ?>" class="mb-5">
                            <button type="submit" class="btn btn-primary btn-offre"> Postuler maintenant</button>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Informations sur le poste -->

        <div class="col-md-4 text-center box-shadow-lg">
            <div class="position-sticky" style="top: 2rem;">
                <div class="row mb-2">

                    <div class="col-lg-12 text-start shadow-sm p-4">
                        <div class="col">
                            <i class="fa fa-clock-o" aria-hidden="true"></i> <span
                                class="text-muted fst-italic"><?php echo 'Publiée le ' . get_the_date(); ?></span>
                        </div>
                        <hr>
                        <div class="col mt-4">
                            <i class="fa-sharp fa-solid fa-address-card"></i><span class="text-muted">
                                <?php echo $jobcontract; ?>
                            </span>
                        </div>
                        <hr>
                        <div class="col mt-4">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> <span
                                class="text-muted"><?php echo $joblocation;  ?>
                            </span>
                        </div>
                        <hr>
                        <div class="col mt-4">
                            <i class="fa-solid fa-calendar-days"></i> <span
                                class="text-muted"><?php echo $jobbranch;  ?>
                            </span>
                        </div>
                        <hr>
                        <div class="col mt-4">
                            <i class="fa-solid fa-briefcase"></i> <span class="text-muted"><?php echo $jobbody;  ?>
                            </span>
                        </div>
                    </div>

                </div>
                <div class="row mt-5">
                    <a href="https://data.enseignementsup-recherche.gouv.fr/pages/referens/?flg=fr"
                        title="Consulter le référentiel des métiers de l'enseignement supérieur" target="_blank">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            <i class="fa fa-eye" aria-hidden="true"></i> Consulter le référentiel des métiers
                        </button>
                    </a>
                </div>
                <div class="row">
                    <a href="<?php echo get_site_url(); ?>" class="mt-5">
                        <button type="submit" class="btn btn-primary btn-offre btn-back-home"><i
                                class="fa fa-arrow-left" aria-hidden="true"></i> Retour aux offres</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>