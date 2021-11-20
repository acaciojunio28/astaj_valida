<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planos de Saúde e Odontológico em Brasília - DF</title>
    <link rel="icon" type="imagem/png" href="public/img/logo.png" \>
    <link rel="stylesheet" type="text/css" href="public/css/style.css" media="screen" />
    <link href="./public/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <script src="./public/js/bootstrap/bootstrap.js" crossorigin="anonymous"></script>
    <script src="./public/js/confirm_delete.js"></script>
    <script src="./public/js/jquery.js"></script>

</head>
<Body>
<div class="container">
     
        <div class="row justify-content-center align-items-center" style="height:100vh"  id="login">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                    <img src="public/img/logo.png" class="rounded mx-auto d-block" id="logo">
                        <form  method="POST" action="app/controller/login_controller.php" autocomplete="off">
                            <div class="form-group">
                                <input type="text" class="form-control mt-2" name="login">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control mt-2" name="senha">
                            </div >
                            <button type="submit" id="login" class="btn btn-primary mt-2">login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>