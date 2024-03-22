<?php

class Model extends Database {
    public function __construct() {
        if(!property_exists($this,"table")){
            $this->table = strtolower($this::class) . "s";
        }
    }

}

?>