<?php
require 'init.php';

$goodId = $_GET['id'] ?? false;
if (!$goodId) {
    die('good id not set');
}

if (!isset($GOODS[$goodId])) {
    die('Good not found');
}

addGood($goodId, $_SESSION);

redirect('/index.php');