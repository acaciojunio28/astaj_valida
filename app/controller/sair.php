<?php
class sair{
public function sair(){
session_start();
unset(
    $_SESSION['login'],

);
header("Location:/astaj_valida/");
session_destroy();
}
    }
$T=new sair();
$T->sair();