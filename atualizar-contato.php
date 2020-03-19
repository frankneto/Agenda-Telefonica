<?php
	// inclue a conexão com o bd
	include "conexao-bd.php";

	//query para atualizar os dados
	$sql = "update pessoas 
	set
		nome = '$_POST[nome]',
		telefone_fixo = '$_POST[telefone_fixo]',
		telefone = '$_POST[telefone]'
	where	
		id = $_POST[id];";

	$query = mysqli_query($con, $sql);
	
	//verifica se a query foi bem-sucedida
	if ($query == true){
		echo "<script>alert('Usuário Atualizado com sucesso');</script>";
		echo "<META http-equiv='refresh' content='1;URL=http://localhost/projeto/index.php?page=exibir-contato&contato=$_POST[id]'> ";
	}
	else{ // se há erros na query
		echo "Não foi possivel atualizar os dados<br>".mysqli_error();
	}
?>