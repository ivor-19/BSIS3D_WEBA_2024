<?php

class Model extends Database
{

    public funtion __construct()
    {
        if(!property_exists($this, 'table')){
            
        $this->table = strtlower($this::class).'s':
    }
    }

    public funtion finsAll()
    { 
        $query = "select * from $this->table";
        $result = $this->query($query):;

        if ($result) { 
            return $result;
        }
        return false;
    }

    public funtion where($data, $data_not = [])
    {}
}
