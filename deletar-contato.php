 <?php
	// inclue a conexão com o bd
	include "conexao-bd.php";

	//query para apagar dados no bd
	$sql = "DELETE FROM pessoas WHERE id = $_REQUEST[contato];";

	//verifica se a query foi bem-sucedida
	if (mysqli_query($con, $sql) === TRUE){
		echo "<script>alert('Usuário Excluído com sucesso');</script>";
		echo "<META http-equiv='refresh' content='1;URL=http://localhost/projeto/index.php?page=listar-contatos&contato='> ";
	} 
	else{// se há erros na query
		echo "DELETE ERRO" . error;
		echo "<script>alert('Erro ao Excluir Usuário');</script>";
		echo "<META http-equiv='refresh' content='1;URL=http://localhost/projeto/index.php?page=listar-contatos&contato='> ";
	}
 ?>