<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEEBC</title>
    <script src="./public/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://kit.fontawesome.com/335f4c7504.js" crossorigin="anonymous"></script>
    <link rel="icon" type="imagem/png" href="public/img/incon.png" \>
    <link rel="stylesheet" type="text/css" href="./public/css/style.css" media="screen" />
    <link href="./public/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <script src="./public/js/bootstrap/bootstrap.js" crossorigin="anonymous"></script>
    <script src="./public/js/confirm_delete.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg shadow p-3 navbar-light" id="nav">
<a class="navbar-brand" href="#">
<img src="public/img/imagem.jfif" width="170" height="70" alt="">
</a>
  <div class="container-fluid" >
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-dark" href="/valida/listar">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="/valida/relatorio">Relatório</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link text-dark" href="/valida/import-csv">Importar</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#">Configuração</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/valida/faixaetaria">Planos</a></li>
        <li><a class="dropdown-item" href="/valida/senha">Usuários</a></li>
       </ul>
      </li>
</ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
   
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#"><?php echo $_SESSION['nome'];?></a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/valida/alterarsenha">Alterar Senha</a></li>
       </ul>
        </li>

   <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item">
            <a class="nav-link text-dark " href="app/controller/sair.php">
        <img src="public/img/sair.png" width="30" height="30" alt="Sair" >
        </a>
        </li>
        </ul>
</div>
</nav>

    