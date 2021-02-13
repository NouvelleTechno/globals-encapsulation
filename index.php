<?php
$cleanedGET = array_map("strip_tags", $_GET);

$cleanedPOST = array_map("strip_tags", $_POST);

$method = $_SERVER["REQUEST_METHOD"];

$cookies = $_COOKIES;