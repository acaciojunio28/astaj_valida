<?php
class conect{

public function conectar(){
session_start();
//$nlo=$_SESSION['login'];
if(!isset($_SESSION['login'])){
    header("Location:/www.astajecorretora.com/astaj_valida/ ");  
}//else{
//    echo"<script language='javascript' type='text/javascript'>alert('Bem vindo " . $_SESSION['login'] ."');</script>";
//    }
 }

}
$D=new conect();
$D->conectar();