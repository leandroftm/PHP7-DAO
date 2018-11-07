<?php 

	require_once('config.php');

	/*

	$sql = new Sql();

	$usuarios = $sql->select('SELECT * FROM tb_usuarios');

	echo json_encode($usuarios);
	*/

	//Carrega 1 usuário
	/*$user = new Usuario();
	$user->loadById(1);
	echo $user;*/

	//Carrega uma lista de usuários
	/*$list = Usuario::getList();
	echo json_encode($list);*/

	//Carrega uma lista de usuários buscando pelo login
	/*$search = Usuario::search("dm");
	echo json_encode($search);*/

	//Carrega um usuãrio usando o login e a senha
	/*$user = new Usuario();
	$user->login("admin1","admin");
	echo $user;*/

	//Insere novo usuário
	/*$user = new Usuario("login", "senha");	
	$user->insert();
	echo $user;*/

	//Atualiza usuário
	/*$user = new Usuario();
	$user->loadById(16);
	$user->update("novoadmin", "novasenha");
	echo $user;*/

	//Deleta um usuário
	/*$user = new Usuario();
	$user->loadById(20);
	$user->delete();
	echo $user;*/
 ?>