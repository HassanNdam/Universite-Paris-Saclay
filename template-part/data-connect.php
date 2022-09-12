<?php 

global $wp_query;
$args = $wp_query -> query_vars;
$args ['post_type'] = 'post';

$metaquery = array();

$args ['meta_query'] = $metaquery;

$myquery = new WP_Query($args);

$wp_query = $myquery;

$post_number = $myquery -> found_posts;
