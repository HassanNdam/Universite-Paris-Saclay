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

<div class="container mt-5">
    <div class="row">
        <div class="cadre-post_number border border-2 p-2">
            <h4>Offres trouvées (<?= $post_number ?>)</h4>
        </div>
    </div>
</div>


<main class="container mt-5">
    <div class="row g-5 ">
        <div class="col-md-9">

            <?php
      $args = array(
          'posts_per_page'   => -1,
          'offset'           => 0,
          'orderby'          => 'date',
          'order'            => 'desc',
          'post_type'        => 'post',

        );
$myposts = get_posts($args);

foreach ($myposts as $post) : setup_postdata($post);
    $post_number2 = 0;
    $jobcontract = get_post_custom_values('job_contract')[0];
    $joblocation = get_post_custom_values('job_location')[0];
    $jobcategory = get_post_custom_values('job_category')[0];
    $jobbody = get_post_custom_values('job_boby')[0];
    $jobbranch = get_post_custom_values('jobbranch');

    $post_title = get_the_title($post);

    ?>

            <div class="row mb-2">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

                    <?php changement_couleur_permutation($post_number, $post_title);?>
                    <div class="col-md-1 p-4 border">
                        <?php change_icone_categorie($jobcategory); ?>
                    </div>
                    <div class="col-md-8 p-4 flex-column position-static ">

                        <div class="mb-3 text-muted fst-italic">
                            Publié le <?php echo get_the_date(); ?>
                        </div>

                        <?php echo $jobcontract; ?>
                    </div>
                    <div class="col-md-3 align-self-center justify-conten-center">
                        <a href="">
                            <button type="submit" class="btn btn-primary btn-offre">Voir l'offre</button>
                        </a>
                    </div>
                </div>
            </div>


            <?php $post_number++ ; endforeach;
wp_reset_postdata(); ?>

        </div>

        <div class="col-md-3">
            <div class="position-sticky mx-auto" style="top: 2rem;">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Mot clé</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Catégorie</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="reset" class="btn btn-dark">Rafraîchir</button>
                    <button type="submit" class="btn btn-primary">Rechercher </button>
                </form>

            </div>
        </div>
    </div>
    </div>
</main>