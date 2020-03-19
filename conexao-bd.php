<?php
	//nome do banco de dados
	$meu_banco = "agenda";

	$con = mysqli_connect("127.0.0.1","root","",$meu_banco);
	
	// Verica a conexão
	if (mysqli_connect_errno()){
		echo "Falha na conexão com o banco de dados:" . mysqli_connect_error();
	}
	mysqli_select_db($con,$meu_banco);
?>

