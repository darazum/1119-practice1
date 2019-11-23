<?php
require 'init.php';

$categoryId = $_GET['category'] ?? CATEGORY_REBEL;
if (!isset($CATEGORIES[$categoryId])) {
    die('not found category');
}

$categoryGoods = array_filter($GOODS, function(array $good) use ($categoryId) {
    return $good['category'] == $categoryId;
});
include 'main.phtml';
?>

