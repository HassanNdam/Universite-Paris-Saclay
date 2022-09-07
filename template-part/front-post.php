<?php

global $wp_query;
$args = $wp_query -> query_vars;
$args ['post_type'] = 'post';

$metaquery = array();

$args ['meta_query'] = $metaquery;

$myquery = new WP_Query($args);

$wp_query = $myquery;

$post_number = $myquery -> found_posts;

?>

<!-- Offres trouvées  -->

<div class="container mt-5">
    <div class="row">
        <div class="d-flex p-3 border border-1">
            <div class="flex-grow-1 align-self-center">
                <h5>Offres trouvées (<?= $post_number ?>)</h5>
            </div>
            <div class="flex-grow-2 align-self-center">
                <a class="lien-metier" href="https://data.enseignementsup-recherche.gouv.fr/pages/referens/?flg=fr"
                    title="Tous les métiers de l'enseignement supérieur et de la recherche" target="_blank">
                    <i class="fa fa-eye" aria-hidden="true"></i> Voir les métiers
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Listes des offres -->

<main class="container mt-5">
    <div class="row g-5 ">
        <div class="col-md-9">

            <?php

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
                <div
                    class="row g-0 border overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

                    <?php changement_couleur_permutation($post_number, $post_title);?>
                    <div class="col-md-1 p-4 border align-self-center">
                        <?php change_icone_categorie($jobcategory); ?>
                    </div>
                    <div class="col-md-9 p-4 flex-column position-static ">

                        <div class="mb-3 text-muted fst-italic">
                            Publié le <?php echo get_the_date(); ?>
                        </div>

                        <div class="row gx-3 mb-3">
                            <div class="col-lg-6">
                                <i class="fa fa-map-marker" aria-hidden="true"></i> <?php  echo $joblocation; ?>
                            </div>
                            <div class="col-lg-6">
                                <i class="fa fa-bookmark-o" aria-hidden="true"></i> <?php echo $jobcontract; ?>
                            </div>
                        </div>
                        <div class="row gx-3">
                            <div class="col-lg-6">
                                <i class="fa fa-building" aria-hidden="true"></i> <?php  echo $jobbranch; ?>
                            </div>
                            <div class="col-lg-6">
                                <i class="fa fa-user" aria-hidden="true"></i> <?php echo $jobcategory; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 align-self-center text-center">
                        <a href="<?php the_permalink(); ?> ">
                            <button type="submit" class="btn btn-primary btn-offre">Voir l'offre</button>
                        </a>
                    </div>
                </div>
            </div>


            <?php $post_number++ ; endwhile;
wp_reset_postdata(); ?>

        </div>

        <!-- Filtre -->

        <div class="col-md-3 text-center box-shadow-lg">
            <h1 class="mb-5 mt-4 filtre">Filtre</h1>
            <div class="position-sticky" style="top: 2rem;">
                <form methode="GET" action="" class="form-group">
                    <div class="mb-5">
                        <input type="text" class="form-control" id="keyword" aria-describedby="emailHelp" placeholder="Mots-clés">
                    </div>
                    <div class="mb-5">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Catégorie</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Type de contrat</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="mb-5">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Branche d'activité professionnelle</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="mb-5">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Corps</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>


                    <button type="reset" class="btn btn-dark">Rafraîchir</button>
                    <button type="submit" class="btn btn-primary">Rechercher </button>
                </form>

            </div>
        </div>
    </div>
    </div>

</main>

<div class="container d-flex align-items-center justify-content-center mt-5">
    <?php pagination_post();?>
</div>