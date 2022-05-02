<?php
session_start();

class conect{

public function conectar(){

$url="/valida";
if(is_null($_SESSION['login'])){
    header("Location:".$url);  
}
 
}

}
$D=new conect();
$D->conectar();
