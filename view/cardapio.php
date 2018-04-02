<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lanchonete Amigasso</title>
    <link href="/<?php echo pasta; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/<?php echo pasta; ?>/assets/css/main.css">
  </head>
  <body>
   <?php include('navbar.php') ?>

<?php
$produtos = new \model\Produtos();
$lanches = $produtos->fetchLanches();
?>
<div class="container">
	<div class="page-header">
		<h1>Cardápio</h1>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>
				Sanduíche
				</th>
				<th>
				Ingredientes
				</th>
				<th>
				Preço
				</th>
		</tr>
		</thead>
		<tbody>
      <?php 
        foreach($lanches as $lanche){
          ?>
        <tr>
          <td><?php echo $lanche['nome'] ?></td>
          <td><?php echo $lanche['ingredientes']?></td>
          <td>R$<?php echo $lanche['preco']?></td>
          
        </tr>
          <?php
        }
      ?>
		
		</tbody>
	</table>
</div>
<div>
<?php include "footer.php" ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/<?php echo pasta; ?>/assets/js/bootstrap.min.js"></script>
    <script src="/<?php echo pasta; ?>/assets/js/main.js"></script>
  </body>
</html>