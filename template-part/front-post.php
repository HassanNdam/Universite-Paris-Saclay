<?php

require_once("data-connect-search.php"); 

?>

<!-- Offres trouvées  -->

<div class="container mt-5 ">
    <h5>Offres trouvées (<?= $post_number ?>)</h5>
</div>


<?php //Include list of posts

require_once("post-list.php");

?>



<!-- Filtre -->

<div class="col-md-3 text-center box-shadow-lg">
    <h1 class="mb-5 mt-4 filtre">Lancer ma recherche</h1>
    <div class="position-sticky" style="top: 2rem;">
        <form methode="GET" action="<?php echo get_site_url(); ?>" id="searchform" class="form-group">
            <div class="input-group mb-5">
                <input type="search" id="s" class="form-control " placeholder="MOTS-CLÉS" name="s"
                    value="<?php  echo $keyword; ?>">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit" title="Rechercher par mot clé">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="mb-5">
                <select name="category" class="form-select form-control" aria-label="Default select example">
                    <option value="0" <?php if ($category_value == '0') {
                        echo('selected');
                    } ?>>Catégorie</option>
                    <?php
                        select_search_value(JOBCATEGORY, $category_value);?>
                </select>
            </div>
            <div class="mb-5">
                <select name="contract" class="form-select form-control" aria-label="Default select example">
                    <option value="0" <?php if ($contract_value == '0') {
                        echo('selected');
                    } ?>>Type de contrat
                    </option>
                    <?php
                          select_search_value(JOBCONTRACT, $contract_value);?>
                </select>
            </div>

            <div class="mb-5">
                <select name="branch" class="form-select form-control" aria-label="Default select example"
                    title="Branche d'Activité Professionnelle">
                    <option value="0" <?php if ($branch_value == '0') {
                        echo('selected');
                    } ?>>BAP</option>
                    <?php
                        select_search_value(JOBBRANCH, $branch_value);
?>
                </select>
            </div>

            <div class="mb-5">
                <select name="body" class="form-select form-control" aria-label="Default select example">
                    <option value="0" <?php if ($body_value == '0') {
                        echo('selected');
                    } ?>>Corps</option>
                    <?php
                        select_search_value(JOBBODY, $body_value);
?>
                </select>
            </div>
            <a href="<?= get_site_url(); ?>"><button type="button" onclick='window.location.reload(false)' class="btn btn-dark">Rafraîchir</button></a>
            <button type="submit" class="btn btn-primary" name="search" value="search" id="searchsubmit"
                onclick="this.blur();">Rechercher
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