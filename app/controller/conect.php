<?php
session_start();

class conect{

public function conectar(){

$url="/astaj_valida/index.php";
if(!isset($_SESSION['login'])){
    header("Location:".$url);  
}
 
}

}
$D=new conect();
$D->conectar();

