<?php

$jobcontract = get_post_custom_values('job_contract')[0];
$joblocation = get_post_custom_values('job_location')[0];
$jobcategory = get_post_custom_values('job_category')[0];
$jobbody = get_post_custom_values('job_boby')[0];
$jobbranch = get_post_custom_values('job_branch')[0];

?>

<!-- <div class="position-relative">
    <div class="position-absolute top-50 start-50 translate-middle text-center bloc-detail-offre">
            <div class="row g-5">
                    <h1>1</h1>
                    <h1>1</h1>
                    <h1>1</h1>
            </div>
    </div>
</div> -->


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
                <div class="row g-0 border overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col-md-10 p-4 flex-column position-static ">
                        <?php the_content(); ?>
                    </div>

                    <div class="text-center mb-5">
                        <a href="<?php the_permalink(); ?>" class="mb-5">
                            <button type="submit" class="btn btn-primary btn-offre"><i class="fa fa-plus"
                                    aria-hidden="true"></i> Postuler maintenant</button>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Informations sur le poste -->

        <div class="col-md-4 text-center box-shadow-lg">
            <h1 class="mb-5 mt-4 post-details">Détails de l'offre : </h1>
            <div class="position-sticky" style="top: 2rem;">
                <div class="row">
                    <img src="<?php echo get_template_directory_uri(). '/assets/images/General.jpg'; ?>"
                        alt="Image affichage poste" class="img-fluid rounded-3">


                    <a href="<?php the_permalink(); ?>" class="mt-5">
                        <button type="submit" class="btn btn-primary btn-offre"><i class="fa fa-plus"
                                aria-hidden="true"></i> Postuler maintenant</button>
                    </a>
                    <a href="<?php echo get_site_url(); ?>" class="mt-5">
                        <button type="submit" class="btn btn-primary btn-offre btn-back-home"><i
                                class="fa fa-arrow-left" aria-hidden="true"></i> Retour aux offres</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>