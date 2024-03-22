<?php

class Model extends Database
{

    public function __construct()
    {
        if (!property_exists($this, 'table')) {

            $this->table = strtolower($this::class) . 's';
        }
    }

    public function findAll()
    {
        $query = "select * from $this->table";
        $result = $this->query($query);

        if ($result) {
            return $result;
        }
        return false;
    }

    public function where($data, $data_not = [])
    {
        
    }
}
