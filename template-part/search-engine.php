
<?php 

$keyword = ""; 
$category_value = 0;
$contract_value = 0; 
$branch_value = 0; 
$body_value = 0;  


if ($_GET){
    if($_GET['s']){
        $keyword = $_GET['s'];
    }
}

