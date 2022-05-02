<?php
session_start();
class cessao{

public function conectar(){
//session_start();
//$nlo=$_SESSION['login'];
if(is_null($_SESSION['login'])){
    header("Location:/valida/ ");  
}
if($_SESSION['login']!='administrador'){
    header("Location:/valida/erro ");
}
 }

}
$D=new cessao();
$D->conectar();
