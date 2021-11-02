<?php
session_start();
require('../model/banco.php');

//recuperar configurações do wordpress para criptografar senha
//https://developer.wordpress.org/reference/functions/wp_hash_password/
include_once ('../../../wp-config.php');
global $wpdb;
//essa função deve ser chamada para verificação da griptografia do wordpress
wp_hash_password($_POST['senha']);

class login_controller{

public function logar(){
$cadastro= new banco();

$verificar=$cadastro->login($_POST['login'],$_POST['senha']);

if ($verificar==0){
    
    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='/www.astajecorretora.com/astaj_valida/';</script>";
    
    die();
}else{
    $_SESSION['login']=$_POST['login'];
    $_SESSION['senha'];
    header("Location:/www.astajecorretora.com/astaj_valida/listar");
} 


}

}
$D=new login_controller();
$D->logar();