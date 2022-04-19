<?php
session_start();
class cessao{

public function conectar(){
//session_start();
//$nlo=$_SESSION['login'];
if(!isset($_SESSION['login'])){
    header("Location:/astaj_valida/ ");  
}
if($_SESSION['login']!='administrador'){
    header("Location:/astaj_valida/erro ");  
}
 }

}
$D=new cessao();
$D->conectar();
