<?php

use App\Globals\Get;
use App\Globals\Globals;

require_once "vendor/autoload.php";

$globals = new Globals;

$get = $globals->getGET();

$cleanedGET = array_map("strip_tags", $get);

$method = $globals->getSERVER("REQUEST_METHOD");

$cookies = $globals->getCOOKIE();

$id = Get::key("id");

