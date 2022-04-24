<?php
//session_start();

class conect{

public function conectar(){

    $url="/valida/index.php";
    //if(!isset($_SESSION['login'])){
    //header("Location:".$url);
    //exit();
    //}
    session_start();		
	if($_SESSION['login'] == NULL || $_SESSION['login']== "")
	{
		header("Location: " . $url);
		exit();
	}
 
}

}
$D=new conect();
$D->conectar();

