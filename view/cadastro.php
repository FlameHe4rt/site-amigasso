<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lanchonete Amigasso</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/site-amigasso/principal">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="/site-amigasso/principal">Home</a></li>
        <li><a href="/site-amigasso/principal/cardapio">Cardápio</a></li>
        <li><a href="/site-amigasso/principal/pedido">Peça agora!</a></li>
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Minha conta<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Cadastre-se</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </li>
    </div>
  </div>
</nav>
<!-- Fim navbar -->
<div class="container">
<div class="col-sm-4">
<div class="page-header"><h2>Cadastro</h2></div>
<form method="post" action="">
	<div class="form-group">
	<label for="nome">Nome</label>
	<input class="form-control" type="text" name="nome" id="nome"></div>
	<div class="form-group">
	<label for="endereco">Endereço</label>
	<input placeholder="Rua das Flores 123" class="form-control" type="text" name="endereco" id="endereco"></div>
	<div class="form-group">
	<label for="telefone">Telefone</label>
	<input class="form-control telefone"  type="text" name="telefone" id="telefone"></div>
	<div class="form-group">
	<label for="cpf">CPF</label>
	<input class="form-control" type="text" name="cpf" id="cpf"></div>
	<div class="form-group">
	<label for="email">E-mail</label>
	<input class="form-control" type="email" name="email" id="email"></div>
	<div class="form-group">
	<label for="senha">Senha</label>
	<input class="form-control" type="password" name="senha" id="senha"></div>
	<input class="btn btn-primary" type="submit" value="Cadastrar">
</form>
</div>
</div>
<div  class="col-sm-12 footer text-center">
		Lanchonete Amigasso © 2017 - Todos os direitos reservados<br>
		CNPJ nº 00.000.000/0000-00
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
</body>
</html>