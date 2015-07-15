<?php

$DBCONNECT = mysqli_connect("localhost", "root", "", "camt-shop", "3306");

if (!isset($_REQUEST["function_"])) {
    echo "No Data Post";
}
//AUTHOR
else if ($_REQUEST["function_"] === "author") {
    $query = "SELECT * FROM `author`";
}
//KEYWORD
else if ($_REQUEST["function_"] === "keyword") {
    $query = "SELECT * FROM `popular_keyword`";
} else if ($_REQUEST["function_"] === "keyword_frequency_update") {
    $query = "UPDATE `keyword` SET `keyword`.`frequency` = `keyword`.`frequency` + 1 WHERE `keyword`.`id` = '" . $_REQUEST["keyword_id"] . "'";
    $result = mysqli_query($DBCONNECT, $query);
    return true;
}
//PRODUCT
else if ($_REQUEST["function_"] === "product") {
    $query = "SELECT * FROM `product`";
} else if ($_REQUEST["function_"] === "product_by_keyword") {
    $query = "SELECT * FROM `product` WHERE `product`.`name` LIKE '%" . $_REQUEST["keyword"] . "%'";
}
//REVIEW
else if ($_REQUEST["function_"] === "review") {
    $query = "SELECT * FROM `review`";
}
$result = mysqli_query($DBCONNECT, $query);
$array = array();
while ($fetch_result = mysqli_fetch_assoc($result)) {
    $array[$fetch_result['id']] = $fetch_result;
}
echo json_encode($array);
