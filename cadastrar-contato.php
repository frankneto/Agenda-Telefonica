<?php
	// inclue a conexão com o bd
	include "conexao-bd.php";
	
	//query para inserir dados no bd
	$sql = "insert into pessoas(
	nome,
	telefone_fixo,
	telefone) 
	VALUES (
	'".$_POST["nome"]."',
	'".$_POST["telefone"]."',
	'".$_POST['celular']."'
	)";

	$query = mysqli_query($con, $sql);
	
	//verifica se a query foi bem-sucedida
	if ($query == true) {
		echo "<script>alert('usuário cadastrado com sucesso');</script>";
		echo "<META http-equiv='refresh' content='1;URL=http://localhost/projeto/index.php?page=listar-contatos&contato='> ";
    }
	else{// se há erros na query
		echo "Não foi possivel inserir os dados<br>".mysqli_error();
	}
?>