<?php

$jobcontract = get_post_custom_values('job_contract_type')[0];
$joblocation = get_post_custom_values('job_location')[0];
$jobcategory = get_post_custom_values('custom_categorie')[0];
$jobbody = get_post_custom_values('custom_corps')[0];
$jobbranch = get_post_custom_values('custom_bap')[0];
$joblink = get_post_custom_values('job_link')[0];
$jobaddress =  get_post_custom_values('job_address')[0]; 
$jobtown =  get_post_custom_values('job_town')[0]; 

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
                    <div class="col-md-12 p-4 flex-column position-static text-justify text-muted">
                        <?php the_content(); ?>
                    </div>
                    <div class="text-center mb-5">
                        <a href="<?php echo $joblink; ?>" class="mb-5" title="Candidater pour le poste de <?= the_title_attribute(); ?>" target="_blank" >
                            <button type="submit" class="btn btn-primary btn-offre" onclick="this.blur();"> Postuler maintenant</button>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Informations sur le poste -->

        <div class="col-md-4 text-center box-shadow-lg">
            <div class="position-sticky" style="top: 2rem;">
                <div class="row mb-2">

                    <div class="col-lg-12 text-start shadow-sm p-4 border-right ">
                        <div class="col">
                            <i class="fa fa-clock-o text-muted" aria-hidden="true"></i> <span
                                class="fst-italic text-muted"><?php echo 'Publiée le ' . get_the_date(); ?></span>
                        </div>
                        <hr>
                        <div class="col mt-4">
                            <i class="fa-sharp fa-solid fa-address-card text-muted"></i><span class="">
                                <?php echo $jobcontract; ?>
                            </span>
                        </div>
                        <hr>
                        <div class="col mt-4">
                            <i class="fa fa-map-marker text-muted" aria-hidden="true"></i> <span
                                class=""><?php echo $jobtown == NULL ? 'PARIS-SACLAY': $jobtown;  ?>
                            </span>
                        </div>
                        <?php if($jobbranch != null) : ?>
                        <hr>
                        <div class="col mt-4">
                            <i class="fa-solid fa-calendar-days text-muted"></i> <span
                                class=""><?php echo $jobbranch;  ?>
                            </span>
                        </div>
                        <?php else: endif; ?>
                        <?php if($jobbody != null) : ?>
                        <hr>
                        <div class="col mt-4">
                            <i class="fa-solid fa-briefcase text-muted"></i> <span class=""><?php echo $jobbody;  ?>
                            </span>
                        </div>
                        <?php else: endif; ?>
                    </div>

                </div>
                <div class="row mt-5">
                    <a href="https://data.enseignementsup-recherche.gouv.fr/pages/referens/?flg=fr"
                        title="Consulter le référentiel des métiers de l'enseignement supérieur" target="_blank">
                        <button type="button" class="btn btn-primary" onclick="this.blur();">
                            Consulter le référentiel des métiers
                        </button>
                    </a>
                </div>
                <div class="row">
                    <a href="<?php echo get_site_url(); ?>" class="mt-5">
                        <button type="submit" class="btn btn-primary btn-offre btn-back-home" onclick="this.blur();"><i
                                class="fa fa-arrow-left" aria-hidden="true"></i> Retour aux offres</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>