<?php
if(isset($_GET['url'])){
$url= $_GET['url'] ? $_GET['url']:"login";
}
else{
    $url="login";
}

switch($url){
    case "listar":
       include("app/view/listar.php");
    break;
    case "cadastro":
        include("app/view/cadastro.php");
     break;
     case "editar":
        include("app/view/editar.php");
     break;
     case "login":
      include("app/view/login.php");
      case"faixaetaria":
         include("app/view/faixaetaria.php");
   break;
     
}




