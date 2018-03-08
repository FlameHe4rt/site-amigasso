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
						<a href="/site-amigasso/principal/pedidoa">Peça agora!</a>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Minha conta<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li>
								<a href="/site-amigasso/principal/cadastro"><span class="glyphicon glyphicon-user"></span> Cadastre-se</a>
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
	$lanches = $produtos->fetchLanches();
	$bebidas = $produtos->fetchBebidas();

	?>
	<div class="container">
		<div class="page-header">
			<h1>Peça agora!</h1>
		</div>
		<div class="col-md-8">
			<div class="page-header">
				<h1>Lanches</h1>
			</div>
      <div class="row">
        <div class="lanches">
          <?php foreach($lanches as $lanchinho){
          	    $preco = str_replace(".",",", $lanchinho['preco']);
          	?>

          <div class="col-md-3 thumbnail text-center">
            <img src="https://placehold.it/180x180" class="img-responsive">
            <h4><?php echo $lanchinho['nome'] ?></h4>
            <small data-toggle="popover" title="Ingredientes" data-placement="bottom" data-content="<?php echo $lanchinho['ingredientes'] ?>">Clique para ver os Ingredientes</small><br><br>
            <small>R$: <?php echo $preco?></small> <button class="btn btn-primary btn-sm ">Eu quero!</button><br>
          </div>
          <?php } ?>
        </div>
      </div>
		</div>
		<div class="col-md-4">
      <div class="page-header">
				<h1>Meu Pedido</h1>
			</div>
			<table class="table">
			  <thead>
			    <tr>
			      <td class="text-center">Item</td>
			      <td class="text-center">Valor</td>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td colspan="2" class="text-center">Não há produtos selecionados</td>
			    </tr>
			  </tbody>
			</table>
		</div>
    <div class="col-md-8">
			<div class="page-header">
				<h1>Bebidas</h1>
			</div>
			<?php foreach($bebidas as $bebida){
				$preco_bebida = str_replace(".",",",$bebida['preco']);
			?>
			<div class="col-md-3 thumbnail text-center">
            <img src="https://placehold.it/180x180" class="img-responsive">
            <h4><?php echo $bebida['nome'] ?></h4> 
            <small>R$: <?php echo $preco_bebida?></small> <button class="btn btn-primary btn-sm ">Eu quero!</button><br>
          </div>
          <?php } ?>
		</div>
	</div>
	<?php include "footer.php"  ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	</script> <!-- Include all compiled plugins (below), or include individual files as needed -->

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="../assets/js/main.js">
	</script>
</body>
</html>