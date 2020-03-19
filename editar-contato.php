
<?php //query para jogar os dados no variavel busca
	$inicial= $_REQUEST['contato'];
	$busca = mysqli_query($con, "select * from pessoas where id = '$inicial'" ) 
		or trigger_error
		('Erro ao executar consutla. Detalhes = ' . mysqli_error());
	$dados = mysqli_fetch_array($busca);
?>

	<center>
		<h1> Atualizar Contato</h1>
	</center>
	
	<div class="row">
		<form class="form-horizontal" name="agenda" action="atualizar-contato.php" method="post" >

			<div class="form-group">
				<label>Código</label>
				<input type="text" class="form-control" name="id" value="<?php echo $dados['id']; ?>" readonly>
			</div>
			<div class="form-group">
				<label>Nome</label>
				<input type="text" class="form-control" name="nome" placeholder="Nome (somente letras)" maxlength="50" pattern="[a-A-z\s]+$" / value="<?php echo $dados['nome']; ?>" autofocus required>
			</div>
    
			<div class="form-group">
				<label>Telefone Fixo</label>
				<input type="tel" class="form-control" name="telefone_fixo" pattern="\([0-9]{2}\) [0-9]{4}-[0-9]{4}$" placeholder="(00) 0000-0000" maxlength="14" value="<?php echo $dados['telefone_fixo']; ?>">
			</div>
			<div class="form-group">
				<label>Celular</label>
				<input type="tel" class="form-control" name="telefone" pattern="\([0-9]{2}\) [0-9]{5}-[0-9]{4}$" placeholder="(00) 00000-0000" maxlength="15" value="<?php echo $dados['telefone']; ?>" required>
			</div>
    
			<button type="submit" class="btn btn-primary">Atualizar</button>
			<button type="reset" class="btn btn-primary">Limpar</button>
		</form>
	</div>