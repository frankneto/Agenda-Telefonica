
<?php // aqui gera uma query de busca para mostrar os resultados na tabela
	$inicial= $_REQUEST['contato'];

	$busca = mysqli_query($con, "select * from pessoas where id = '$inicial'" ) 
		or trigger_error
		('Erro ao executar consutla. Detalhes = ' . mysqli_error());
	$dados = mysqli_fetch_array($busca);

?>

	<center>
		<h1> Detalhes do Contato</h1>
	</center>

<table class="table table-striped table-hover" align='center' style="width:800px;">
   	<tr>
   		<td>Código</td>
   		<td>Nome</td>
        <td>Telefone Fixo</td>
        <td>Celular</td>
   		<td align="center">Ações</td>
   	</tr>
   	
   	<tr>
   		<td><?php echo $dados['id']; ?></td>
   		<td><a href="index.php?page=exibir-contato&contato=<?php echo $dados['id']; ?>"><?php echo $dados['nome']; ?></td>
        <td><a href="index.php?page=exibir-contato&contato=<?php echo $dados['id']; ?>"><?php echo $dados['telefone_fixo']; ?></td>
        <td><a href="index.php?page=exibir-contato&contato=<?php echo $dados['id']; ?>"><?php echo $dados['telefone']; ?></td>
   		<td align='center'>
   			<div class="btn-group btn-group-sm" role="group" aria-label="Ações para os Contatos!">
   				<a href="index.php?page=editar-contato&contato=<?php echo $dados['id']; ?>"  type="button" " aria-label="Editar Contato">
   					<span class="glyphicon glyphicon-edit"></span>
   				</a>
   				<a href="deletar-contato.php?contato=<?php echo $dados['id']; ?>" type="button" " aria-label="Excluir Contato">
					<span class="glyphicon glyphicon-remove"></span>
   				</a>
   			</div>
   		</td>
   	</tr>		
</table>
<center><a href="index.php?page=listar-contatos&contato" class="btn btn-primary">Voltar aos contatos</a></center>
	