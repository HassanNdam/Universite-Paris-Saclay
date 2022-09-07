<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo("name");?></title>
    <link rel="icon" href="<?php echo (get_template_directory_uri() . '/assets/logo/logo_paris_saclay.svg') ?>" sizes="16x16 32x32 48x48 64x64">

<?php wp_head(); ?>

</head>
<body>

<header class="site-header">
    <nav class="container navbar navbar-default navbar-expand d-flex  flex-column flex-md-row justify-content-between py-3">
        <a class="navbar-brand" title="Aller sur la page d'accueil" href="<?php echo get_site_url(); ?>" >
            <img src="<?php echo get_template_directory_uri(). '/assets/logo/paris-saclay.png'?>" alt="Logo Université Paris-Saclay" style="max-width:250px" class="img-fluid"> 
        </a>
    <div class="d-flex">
        <a href="#" target="_blank">
            <button type="button" class="btn mobilite-btn" onclick="this.blur();">Mobilité interne</button>
        </a>
        <a href="#" target="_blank">
            <button type="button" class="btn btn-primary espace-buton-center" onclick="this.blur();"> Candidature spontanée</button>
        </a>
    </div>
    </nav>

</header>


<div class="position-relative p-3 p-md-5  overflow-hidden header-image">
   <!-- header image    -->
</div>