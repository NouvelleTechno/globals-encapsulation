<?php
namespace App\Globals;

class Get{
    public static function all(){
        return filter_input_array(INPUT_GET) ?? null;
    }

    public static function key($key){
        return filter_input(INPUT_GET, $key) ?? null;
    }
}