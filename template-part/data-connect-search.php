<?php


global $wp_query;
$args = $wp_query -> query_vars;
$args ['post_type'] = 'post';

$metaquery = array();


$keyword = "";
$category_value = '0';
$contract_value = '0';
$branch_value = '0';
$body_value = '0';


if ($_GET) {
    if (isset($_GET['s'])) {
        $keyword = $_GET['s'];
    };

    if (isset($_GET['category'])) {
        $category_value = $_GET['category'];

        if ($category_value > 0) {
            array_push(
                $metaquery,
                array(
                        'key' => 'custom_categorie',
                        'value' => JOBCATEGORY[$category_value -1],
                        'compare' => '=',)
            );
        };
    }
    if (isset($_GET['contract'])) {
        $contract_value = $_GET['contract'];
        if ($contract_value > 0) {
            array_push(
                $metaquery,
                array(
                'key' => 'job_contract_type',
                        'value' => JOBCONTRACT[$contract_value -1],
                        'compare' => '=',)
            );
        }
    }
    if (isset($_GET['branch'])) {
        $branch_value = $_GET['branch'];
        if ($branch_value > 0) {
            array_push(
                $metaquery,
                array(
                'key' => 'custom_bap',
                        'value' => JOBBRANCH[$branch_value -1],
                        'compare' => '=',)
            );
        }
    }
    if (isset($_GET['body'])) {
        $body_value = $_GET['body'];
        if ($body_value > 0) {
            array_push(
                $metaquery,
                array(
                'key' => 'custom_corps',
                        'value' => JOBBODY[$body_value -1],
                        'compare' => '=',)
            );
        }
    }
};


$args ['meta_query'] = $metaquery;

$myquery = new WP_Query($args);

$wp_query = $myquery;

$post_number = $myquery -> found_posts;
