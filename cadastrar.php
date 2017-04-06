<?php	

	require_once('db.class.php');

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];

	$senha_codificada = sha1($senha);

	$objdb = new db();
	$link = $objdb->conecta_pg();

	$sql = "INSERT INTO usuarios(usuario, senha, email) VALUES('$usuario', '$senha_codificada', '$email')";


	//executar a query
	if (pg_query($link, $sql)){

		echo "Usuário registrado com sucesso!";

	}else{
		echo "Erro ao registrar usuário!";	
		
	}

?>
