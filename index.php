<?php 

	require_once('config.php');

	/*

	$sql = new Sql();

	$usuarios = $sql->select('SELECT * FROM tb_usuarios');

	echo json_encode($usuarios);
	*/

	//Carrega 1 usuário
	//$user = new Usuario();
	//$user->loadById(1);
	//echo $user;

	//Carrega uma lista de usuários
	//$list = Usuario::getList();
	//echo json_encode($list);

	//Carrega uma lista de usuários buscando pelo login
	//$search = Usuario::search("dm");
	//echo json_encode($search);

	//Carrega um usuãrio usando o login e a senha
	//$usuario = new Usuario();
	//$usuario->login("admin1","admin");
	//echo $usuario;

	//Insere novo usuário
	//$aluno = new Usuario("login", "senha");	
	//$aluno->insert();
	//echo $aluno;

	//Atualiza usuário
	$usuario = new Usuario();
	$usuario->loadById(16);
	$usuario->update("novoadmin", "novasenha");
	echo $usuario;
 ?>