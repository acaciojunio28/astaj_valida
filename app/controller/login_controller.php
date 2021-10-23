<?php
session_start();
require('../model/banco.php');

class login_controller{

public function logar(){
$cadastro= new banco();
$verificar=$cadastro->login($_POST['login'],$_POST['senha']);

if ($verificar==0){
    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='/astaj_valida/';</script>";
        die();
     }else{
         $_SESSION['login']=$login;
         $_SESSION['senha']=$senha;
         header("Location:/astaj_valida/cadastro");
     } 


}

}
$D=new login_controller();
$D->logar();