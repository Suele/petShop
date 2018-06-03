<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
     <!-- Bootstrap css -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css">
</head>
<body>

    <div class="container mt-5">
		<form class="form-control">
			<div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu e-mail">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Senha</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Sua senha">
			</div>
			<button type="submit" class="btn btn-secondary">OK</button>
       </form>
	</div>

  <!--Bootstrap js-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>    
</body>
</html>