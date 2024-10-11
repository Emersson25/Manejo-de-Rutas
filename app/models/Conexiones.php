<?php
require_once "../config/Server.php";

class Conexion{
    protected static function getConexion(){
        try{
            $pdo = new PDO(SGBD, USER, PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(Exception $e){
            error_log($e->getMessage());
        }
    }

    public function encryption($string){

    }

    public function descryption($string){
        
    }

    public function getAll($storeProcedure){
        
    }

    public function search($data = []){
        
    }
}
