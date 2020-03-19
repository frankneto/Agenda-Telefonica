
	<center>
		<h1> Listagem de Contatos</h1>
	</center>

	<font size="verdana">

    <?php include "conexao-bd.php";?>

	<?php
		$inicial= $_REQUEST['contato'];
		$busca = mysqli_query($con, "select * from pessoas where nome like '%$inicial%' or id = '$inicial'") 
			or trigger_error
				('Erro ao executar consutla. Detalhes = '.mysqli_error());

		if(mysqli_num_rows($busca)==0){
			echo "<h3 align='center'>";
			echo "Nenhum registro encontrado";
			echo "</h3>";
		}
		else{
			?>
			<table class="table table-striped table-hover" align='center' style="width:100%;">
				<tr>
					<td>Código</td>
					<td>Nome</td>
					<td>Detalhes</td>
				</tr>
				<?php 
				while ($dados = mysqli_fetch_array($busca)){
					?>
					<tr>
						<td><?php echo $dados['id']; ?></td>
						<td><a href="index.php?page=exibir-contato&contato=<?php echo $dados['id']; ?>"><?php echo $dados['nome']; ?></td>
						<td
							<td align='left'>
								<div class="btn-group btn-group-sm" role="group" aria-label="Ações para os Contatos!">
									<a href="index.php?page=exibir-contato&contato=<?php echo $dados['id']; ?>" align='right' type="button" " aria-label="Exibir Contato">
										<span class="glyphicon glyphicon-user"></span>
									</a>   							 							
								</div>
							</td>
					</tr>
					<?php
				}
				?>
			</table>		
			<?php
		}
		?>
	<center><a href="index.php?page=formulario-contato" class="btn btn-primary">Cadastrar Contato</a></center>

