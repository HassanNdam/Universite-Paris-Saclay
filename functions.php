<?php

declare(strict_types=1);

//Limitation excerpt POST

function wpdocs_custom_excerpt_length($length)
{
    return 25;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);



// Retrait de [] dans excerpt

function wpdocs_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'wpdocs_excerpt_more');



function saclay_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support("post-thumbnails");
}

add_action('after_setup_theme', 'saclay_support');

//Fonction ajout fichiers styles

function saclay_style()
{
    wp_enqueue_style('my-custom-style', get_template_directory_uri() . '/style.css', array('ms-bootstrap'), time());
    wp_enqueue_style(
        'ms-bootstrap',
        "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css",
        array(),
        '5.1.3',
        'All'
    );
    wp_enqueue_style(
        'ms-font',
        "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css",
        array(),
        '5.7.0',
        'All'
    );
}
add_action('wp_enqueue_scripts', 'saclay_style');


//Fonction ajout fichier JS boostrap

function wp_enqueue_scripts_saclay()
{
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js',
        array(),
        '4.4.1',
        true
    );
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'wp_enqueue_scripts_saclay');


//Fonction pagination

if (! function_exists('pagination_post_nav')) {
    function pagination_post_nav()
    {
        $previous = (is_attachment()) ? get_post(get_post()->post_parent) : get_adjacent_post(false, '', true);
        $next     = get_adjacent_post(false, '', false);

        if (! $next && ! $previous) {
            return;
        }
        ?>
<nav class="container navigation post-navigation">
    <div class="row nav-links justify-content-between">
        <?php

                            if (get_previous_post_link()) {
                                previous_post_link('<span class="nav-previous">%link</span>', '<');
                            }
                            if (get_next_post_link()) {
                                next_post_link('<span class="nav-next">%link</span>', '>');
                            }
        ?>
    </div>
</nav>

<?php
    }
}

if (! function_exists('pagination_post')) {
    function pagination_post($args = array(), $class = 'pagination')
    {
        if ($GLOBALS['wp_query']->max_num_pages <= 1) {
            return;
        }
        $args = wp_parse_args($args, array(
            'mid_size'           => 2,
            'prev_next'          => true,
            'prev_text'          => __('&laquo;'),
            'next_text'          => __('&raquo;'),
            'screen_reader_text' => __('Posts navigation'),
            'type'               => 'array',
            'current'            => max(1, get_query_var('paged')),
        ));
        $links = paginate_links($args);
        ?>

<nav aria-label="<?php echo $args['screen_reader_text']; ?>">

    <ul class="pagination">

        <?php
                    foreach ($links as $key => $link) { ?>

        <li class="page-item <?php echo strpos($link, 'current') ? 'active' : '' ?>">

            <?php echo str_replace('page-numbers', 'page-link', $link); ?>

        </li>

        <?php } ?>

    </ul>

</nav>

<?php
    }
}


// Fonction remplacement du texte dans l'offre


function replace_text_wps($text)
{
    $replace = array(
        '<h3>Entreprise</h3>' => '<h3></h3>',
        '<h3>Poste</h3>' => '<h3>Mission</h3>',
        '<h3>Profil</h3>' => '<h3>Profil</h3>',
    );
    $text = str_replace(array_keys($replace), $replace, $text);

    return $text;
}
add_filter('the_content', 'replace_text_wps');


function change_icone_categorie($icone_category)
{
    if ($icone_category == "Cat A : cadres") {
        echo "<i class=\"fa-sharp fa-solid fa-address-card \"></i>";
    } elseif ($icone_category == "Cat B : techniciens et encadrement intermédiaire") {
        echo "<i class=\"fa-solid fa-briefcase\"></i>";
    } elseif ($icone_category == "Cat C : fonctions d'exécution") {
        echo "<i class=\"fa-solid fa-calendar-days\"></i>";
    } else {
        echo "Val défaut";
    }
}

//Fonction changement couleur post

function changement_couleur_permutation(int $color_change_post, string $post_title)
{
    if ($color_change_post % 2 == 0) {
        echo "<div class=\"col-md-12 p-3 text-white couleur1\">$post_title</div>";
    } elseif ($color_change_post % 2 > 0) {
        echo "<div class=\"col-md-12 p-3 s text-white couleur2 \">$post_title</div>";
    }
}


// Function to display image according to location

function image_post_change_location($image_location)
{

    switch ($image_location) {
            case 'Sceaux':
            ?>
<img src="<?php echo get_template_directory_uri(). '/assets/images/sceaux.png'; ?>"
    alt="Sceaux faculté - offre d'emploi" class="img-fluid" width="100%">
<?php
            break;
            case 'ORSAY':
                $switch = rand(1,2); 
if ($switch == 1) {
    ?>
<img src="<?php echo get_template_directory_uri(). '/assets/images/PARIS-ORSAY.png'; ?>" alt="Orsay Ville - offre d'emploi"
    class="img-fluid" width="100%">
<?php
} else{ 
?>
<img src="<?php echo get_template_directory_uri(). '/assets/images/orsay_plateau.png'; ?>"
    alt="Orsay Plateau - offre d'emploi" class="img-fluid" width="100%">
<?php 
} //Endif
?>

<?php 
            break;
            case 'GIF-SUR-IVETTES': 
            ?>
<img src="<?php echo get_template_directory_uri(). '/assets/images/gifsur_yvettes.png'; ?>"
    alt="Gif-Sur-Yvettes - offre d'emploi" class="img-fluid" width="100%">
<?php
            break;
            case 'CACHAN': 
        ?>

<img src="<?php echo get_template_directory_uri(). '/assets/images/cachan.png'; ?>" alt="Cachan - offre d'emploi"
    class="img-fluid" width="100%">

<?php
            break;
            default:
        ?>
<img src="<?php echo get_template_directory_uri(). '/assets/images/PARIS-ORSAY.png'; ?>" alt="ORSAY - offre d'emploi"
    class="img-fluid" width="100%">
<?php
            break;
    }
}


//Function to display the elements on the select (via search form)

function select_search_value( $list = array(), $compare_value){
    $i = 0; 
    while($i < count($list)) : 
        foreach($list as $element):                                        
            echo("<option value='" . ($i + 1) . "'");
            if($compare_value == $i + 1) {
                echo(" selected='selected'");
            }
            echo(">" . $element. "</option>");
            ++$i;
        endforeach;
    endwhile; 

}

//Fonction change title text for search engine (SEO)

function change_title_browser_top(){
    if(is_front_page()){
      return bloginfo("name");
    }elseif(is_single()){
        echo $post_single_title = ' - Offres d\'emploi Paris-Saclay' . single_post_title() ;  
        return $post_single_title ;     }
        else{
            echo $search_title = "Recherche - Offre d'emploi Université Paris-Saclay";
            return $search_title; 
        }
}