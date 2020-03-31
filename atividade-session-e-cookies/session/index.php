<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = $_POST["user"];
        $pass = $_POST["password"];

        if($user == "Kamily")
        session_start();
        $_SESSION['login'] = $user;
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session e Cookies</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="card text-center" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Login</h5>
    <span>E-mail</span>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
    <span>Senha:</span>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
    <button type="button" class="btn btn-info">Fazer Login</button>
  </div>
</div>

</body>
</html>