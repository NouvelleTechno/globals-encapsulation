<?php
$cleanedGET = array_map("strip_tags", $_GET);

$method = $_SERVER["REQUEST_METHOD"];

$cookies = $_COOKIE;