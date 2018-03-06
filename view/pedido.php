<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Lanchonete Amigasso</title>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
	<!-- navbar -->
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button class="navbar-toggle" data-target="#myNavbar" data-toggle="collapse" type="button"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand" href="/site-amigasso/principal">Logo</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="/site-amigasso/principal">Home</a>
					</li>
					<li>
						<a href="/site-amigasso/principal/cardapio">Cardápio</a>
					</li>
					<li class="active">
						<a href="/site-amigasso/principal/pedido">Peça agora!</a>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Minha conta<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#"><span class="glyphicon glyphicon-user"></span> Cadastre-se</a>
							</li>
							<li>
								<a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav><!-- Fim navbar -->
	<?php
	$produtos = new \model\Produtos();
	$bebidas = $produtos->fetchBebidas();
	?>
	<div class="container">
		<div class="page-header">
			<h1>Faça seu pedido!</h1>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<form action="" method="post">
					<div class="form-group">
					  <label for="lanche">Quais lanches deseja?</label>
            <input placeholder="Ex: 2 X-Salada, X-Burguer..." class="form-control" id="lanche" name="lanche" type="text">
					</div>
          <div class="form-group">
            <label for="obs">Observações:</label>
            <textarea placeholder="Ex:Sem mostarda em 1 X-Salada..." class="form-control" rows="5" id="obs"></textarea>
          </div>
          <div class="form-group">
          <label>Deseja beber algo?</label>
          <div class="radio">
            <label><input type="radio" name="optradio">Sim</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio">Não</label>
          </div>
          <div class="col-md-6" hidden>
				<h2>Bebidas</h2>
			<table class="table">
				<thead>
					<tr>
						<th>Produtos</th>
						<th>Valor</th>
						<th>Quantidade</th>
					</tr>
				</thead>
				<tbody>
					<?php
					  foreach($bebidas as $bebida){
					?>
					<tr>
						<td><?php echo $bebida['nome'] ?></td>
						<td>R$<?php echo $bebida['preco']?></td>
					</tr><?php
					        }
					      ?>
				</tbody>
			</table>
		</div>
          <input type="submit" class="btn btn-success" value="Pedir!">
				</form>
			</div>
		</div>
	</div>
  <div class="container">
  <div class="margin-top">
    <div class="col-sm-6">
      <h4><p>Um pouco sobre nós</p></h4>
      lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non arcu at risus imperdiet congue et sit amet urna. Etiam egestas magna quis orci ornare eleifend. Donec eu fringilla nulla. Nunc efficitur a enim auctor accumsan. Maecenas pretium elit ante, nec hendrerit lectus vestibulum vel. Mauris sit amet aliquet sapien, eget laoreet turpis. Vivamus et nulla est. Aliquam lacinia eget elit eleifend fringilla    </div>    
    <div class="col-sm-6  right">
      <h4>Curta nossa pagina</h4>
    <div class="fb-page" data-href="https://www.facebook.com/lanchoneteamigasso/" data-tabs="timeline" data-width="500" data-height="200" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/lanchoneteamigasso/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/lanchoneteamigasso/">Lanchonete Amigasso disk</a></blockquote></div>
    </div>
    </div>
    
</div>
</div>
<div>]
</div>
<div class="col-sm-6 footer text-right">Lanchonete Amigasso © 2017 - Todos os direitos reservados</div> <div class="col-sm-6 footer text-left">CNPJ nº 00.000.000/0000-00</div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>
  </body>
</html>