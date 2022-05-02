<?php
session_start();
require('../model/banco.php');

//recuperar configurações do wordpress para criptografar senha
//https://developer.wordpress.org/reference/functions/wp_hash_password/
//include_once ('../../../wp-config.php');
//global $wpdb;
//essa função deve ser chamada para verificação da griptografia do wordpress
//wp_hash_password($_POST['senha']);

class login_controller{

public function logar(){
$cadastro= new banco();

$verificar=$cadastro->login($_POST['login'],md5($_POST['senha']));

if (mysqli_num_rows($verificar)!=1){
    
    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='/valida/';</script>";
    
}else{
    $resultado = mysqli_fetch_assoc($verificar);
    $_SESSION['login']=$resultado['acesso'];
    $_SESSION['user']=$resultado['user'];
    $_SESSION['senha']=$resultado['senha'];
    $_SESSION['nome']=$resultado['nome'];
    header("Location:/valida/listar");
} 


}

}
$D=new login_controller();
$D->logar();