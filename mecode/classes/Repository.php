<?php
include_once 'ConnexionBD.php';

class Repository
{
    protected $bd;
    protected $tableName;
    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->bd = ConnexionBD::getInstance();
    }

    public function findAll() {
        $request = "select * from ".$this->tableName;
        $response =$this->bd->prepare($request);
        $response->execute([]);
        return $response->fetchAll(PDO::FETCH_OBJ);
    }

    public function findById($id) {
        $request = "select * from ".$this->tableName ." where id = ?";
        $response =$this->bd->prepare($request);
        $response->execute([$id]);
        return $response->fetch(PDO::FETCH_OBJ);
    }
    public function supprimer($name) {
        $request = "delete  from ".$this->tableName ." where name = ?";
        $response =$this->bd->prepare($request);
        $response->execute([$name]);
        return $response->fetch(PDO::FETCH_OBJ);
    }
}