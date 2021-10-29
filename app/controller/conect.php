<?php
class conect{

public function conectar(){
session_start();
$nlo=$_SESSION['login'];
if(isset($nlo)){
echo"<script language='javascript' type='text/javascript'>alert('Bem vindo');</script>";
          
}else{
    header("Location:/astaj_valida/ ");
    }
 }

}
$D=new conect();
$D->conectar();