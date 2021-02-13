<?php

use App\Globals\Globals;

require_once "vendor/autoload.php";

$globals = new Globals;

$get = $globals->getGET();

$cleanedGET = array_map("strip_tags", $get);

$method = $_SERVER["REQUEST_METHOD"];

$cookies = $_COOKIE;