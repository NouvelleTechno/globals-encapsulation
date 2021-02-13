<?php

use App\Globals\Globals;

require_once "vendor/autoload.php";

$globals = new Globals;

$post = $globals->getPOST();
$name = $globals->getPOST("name");

if(!empty($post)){
    if(isset($post["name"]) && !empty($post["name"])){
        echo $post["name"];
    }
}