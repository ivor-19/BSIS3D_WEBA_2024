<?php


class Database{
    private function connect(){
        $string = "mysql:host=localhost;dbname=mvcbsis3d_db";
        $con = new PDO($string,"root","");
        return $con;   

    }
    public function query($query, $data = []){
        $con = $this->connect();
        $stm = $con->prepare($query);

        $check = $stm->execute($data);

        if($check){
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            return $result;
        }
        return false;   
    }
}