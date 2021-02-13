<?php

if(!empty($_POST)){
    if(isset($_POST["name"]) && !empty($_POST["name"])){
        echo $_POST["name"];
    }
}