<?php 

get_header(); 

?>

<?php if(is_404()) : ?>
<div class="container d-flex align-items-center justify-content-center mb-5 shadow-sm p-5">
    <div class="text-center">
        <h1 class="display-1 fw-bold text-404 ">404</h1>
        <p class="fs-3 mt-3"> <span class="text-warning">Désolé!</span> Page non trouvée.</p>
        <p class="lead">
            La page que vous recherchez n'exitse pas.
        </p>
        <a href="<?= get_site_url(); ?>" class="btn btn-primary mt-3 mb-3">Retour à l'accueil</a>
    </div>
</div>

<?php 
endif ;
get_footer(); 

?>