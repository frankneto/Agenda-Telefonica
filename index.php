
<!DOCTYPE html>
<html lang="PT-Br">
	<head>
		<meta charset="utf-8">
		<title>Agenda Telefônica</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>
	
	<?php include "conexao-bd.php";?>

	<body>

		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header"></div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Início</a></li>
						<li><a href="index.php?page=listar-contatos&contato=">Listar Todos Contatos</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					<form class="navbar-form navbar-left" role="search" name="busca" action="index.php">
						<div class="form-group">
							<input type="hidden" name="page" value="listar-contatos" />          
							<input type="text" name="contato" class="form-control" placeholder="Buscar">
						</div>
						<button type="submit" class="btn btn-default">Pesquisar</button>
					</form>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>

		<div class="container">
			<?php 
				$page='';
				if( empty($_REQUEST['page'])){  
			?>
					<div class="jumbotron">
						<h2 align='center'>Agenda Telefônica <br> Seja Bem vindo(a)</h2>
					</div>
			<?php 
				}
				else{
					$pagina = $_REQUEST['page'];
					include ($pagina.'.php');
				}
			?>
		</div>
		<?php mysqli_close($con);?>
		
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
