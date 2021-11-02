<?php
class sair{
public function sair(){
session_start();
unset(
    $_SESSION['login'],

);
header("Location:/www.astajecorretora.com/astaj_valida/");
session_destroy();
}
    }
$T=new sair();
$T->sair();