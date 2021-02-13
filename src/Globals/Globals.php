<?php
namespace App\Globals;

class Globals{
    private $GET;

    public function __construct()
    {
        $this->GET = filter_input_array(INPUT_GET);
    }

    public function getGET(){
        return $this->GET;
    }
}