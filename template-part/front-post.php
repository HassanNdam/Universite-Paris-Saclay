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

<div class="offres-emploi">
        <div class="container mt-5">
            <div class="row">
                <div class="cadre-post_number border border-2 p-3">
                    <h4>Offres trouvées (<?= $post_number ?>)</h4>
                </div>
            </div>
        </div> 
</div>

<div class="container">
				<?php if ($myquery->have_posts()) : ?>
					<div class="row mb-3">
					<?php
                    while ($myquery->have_posts()) : $myquery->the_post();

                        $jobcontract = get_post_custom_values('job_contract')[0];
                        $joblocation = get_post_custom_values('job_location')[0];
                        $jobcategory = get_post_custom_values('job_category')[0]; 
                        $jobbody = get_post_custom_values('job_boby')[0]; 
                        $jobbranch = get_post_custom_values('jobbranch'); 


                        ?>

						 <!-- Affichage des posts -->
						
                         <div class="container mt-5">
                            <div class="row">
                                        
                                        <?= change_couleur_categorie($jobcategory);?>

                                    <div class="col-md-12 p-3 border bg-light">
                                        
                                        <?= the_title_attribute(); 
                                        
                                        ?>


                                        <i class="fas fa-city"></i>
                                        <i class="fas fa-map-marker-alt"></i>
                                        <i class="fa-sharp fa-solid fa-address-card"></i>
                                        <i class="fa-solid fa-code-branch"></i>
                                        
                                    </div>
                            </div>
                        </div> 
						
					<?php endwhile; ?>
                    
				<?php else : ?>
                   <!-- Add the code here -->
				<?php endif; ?>
	</div>
</div>