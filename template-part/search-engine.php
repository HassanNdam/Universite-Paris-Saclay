
<?php
require("data-connect.php");
get_template_part("/data/inc-data", "");

$keyword = "";
$category_value = 0;
$contract_value = 0;
$branch_value = 0;
$body_value = 0;


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
    // if (isset($_GET['location'])) {
    //     $location = $_GET['location'];
    //     if ($location > '') {
    //         if (is_numeric($location)) {
    //             array_push($metaquery, array(
    //                 'key' => 'job_id',
    //                 'value' => '^' . $location,
    //                 'compare' => 'REGEXP',
    //             ));
    //         } else {
    //             array_push($metaquery, array(
    //                     'key' => 'job_location',
    //                     'value' => $location,
    //                     'compare' => 'LIKE',
    //                 ));
    //         };
    //     };
    // };
};
