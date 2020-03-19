	
	<center>
		<h1>Cadastrar Contato</h1>
	</center>

<div class="row">

	<form class="form-horizontal" name="agenda" action="cadastrar-contato.php" method="post" >
		<div class="form-group ">
			<label>Nome</label>
			<input type="text" class="form-control" name="nome" placeholder="Nome(somente letras)" maxlength="50" required="required" pattern="[a-A-z\s]+$"/>
		</div>
		<div class="form-group">
			<label>Telefone Fixo</label>
			<input type="tel" class="form-control" name="telefone" pattern="\([0-9]{2}\) [0-9]{4}-[0-9]{4}$"/ required="required" maxlength="14" placeholder="(00) 0000-0000">
		</div>
		<div class="form-group">
			<label>Celular</label>
			<input type="tel" class="form-control" name="celular" pattern="\([0-9]{2}\) [0-9]{5}-[0-9]{4}$"/ required="required" maxlength="15" placeholder="(00) 00000-0000">
		</div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
    <button type="reset" class="btn btn-primary">Limpar</button>
	</form>
</div>