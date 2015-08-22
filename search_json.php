<?php
//ini_set('display_errors', 'On');
include_once '../admin/include/Connection.class.php';
include_once '../admin/API/Search.class.php';
$query = isset($_GET['q'])?$_GET['q']:"";
//if(count_chars($query) < 3) {
//    $query = "";
//}
if(trim($query) == "") {
    $data = [["Delivery",""],["Breakfast",""],["Lunch",""],["Dinner",""],["Buffet",""],["Night Life",""],["Cafe",""]];
    echo json_encode($data);
} else {
    $searchObj = new Search();
    echo json_encode($searchObj->getSearchSuggestions($query));
}