
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Lanchonete Amigasso</title>
	<link href="/<?php echo pasta; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="/<?php echo pasta; ?>/assets/css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include('navbar.php') ?>
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

          <div style="height:320px;" class="col-md-3 thumbnail text-center">
            <img src="https://placehold.it/180x180" class="img-responsive">
            <h4><?php echo $lanchinho['nome'] ?></h4>
            <small data-toggle="popover" title="Ingredientes" data-placement="bottom" data-content="<?php echo $lanchinho['ingredientes'] ?>">Clique para ver os Ingredientes</small><br><br>
            <div style="margin-top:5px;" class="preco">
						<small>R$: <?php echo $preco?></small> <button class="btn btn-primary btn-sm ">Eu quero!</button><br>
						</div>
					</div>
          <?php } ?>
        </div>
      </div>
		</div>
		<div class="col-md-4">
      <div class="alert alert-warning text-center">
				Seu Carrinho
				</div>
			<div>		
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
			<button class="btn btn-success btn-block">Finalizar Pedido</button>
		</div>
		</div>	
    <div class="col-md-8">
			<div class="page-header">
				<h1>Bebidas</h1>
			</div>
			<?php foreach($bebidas as $bebida){
				$preco_bebida = str_replace(".",",",$bebida['preco']);
			?>
			<div style="height: 300px;" class="col-md-3 thumbnail text-center">
            <img src="https://placehold.it/180x180" class="img-responsive">
						<h4><?php echo $bebida['nome'] ?></h4> 
						<div style="margin-top:20px;">
            <small>R$: <?php echo $preco_bebida?></small> <button class="btn btn-primary btn-sm ">Eu quero!</button>
			</div>
					</div>
          <?php } ?>
		</div>
	</div>
	<?php include "footer.php"  ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	</script> <!-- Include all compiled plugins (below), or include individual files as needed -->

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="/<?php echo pasta; ?>/assets/js/jquery.mask.min.js">
	</script>
	<script src="/<?php echo pasta; ?>/assets/js/main.js"></script>
	
</body>
</html>