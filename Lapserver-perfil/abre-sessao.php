<?php
session_start();
function carregaClasse ($nomeDaClasse){
    require_once ("class/".$nomeDaClasse.".php");
}
spl_autoload_register("carregaClasse");
function Conectar(){
    try{
        $pdo = new PDO("mysql:host=127.0.0.1; dbname=ServicosAP", "root", "s0laris");
    }catch (PDOException $e){
        echo "error: ".$e->getMessage();
    }
    return $pdo;
}


?>