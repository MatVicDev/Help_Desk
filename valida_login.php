<?php

session_start();

$autenticado = false;
$id_usuario = null;
$id_perfil_usuario = null;

$usuarios = [
	array('id' => 1,'email' => 'admin@teste.com', 'senha' => 'admin', 'id_perfil' => 'admin'),
	array('id' => 2,'email' => 'user@teste.com', 'senha' => 'user', 'id_perfil' => 'user'),
	array('id' => 3,'email' => 'matheus@teste.com', 'senha' => 'matheus', 'id_perfil' => 'user'),
	array('id' => 4,'email' => 'ellen@teste.com', 'senha' => 'ellen', 'id_perfil' => 'user'),
];

foreach($usuarios as $user) {

	if($_POST['email'] == $user['email'] && $_POST['senha'] == $user['senha']) {
		
		$autenticado = true;
		$id_usuario = $user['id'];
		$id_perfil_usuario = $user['id_perfil'];
	} 
}

if($autenticado) {

	$_SESSION['autenticado'] = 'SIM';
	$_SESSION['id_usuario'] = $id_usuario;
	$_SESSION['id_perfil'] = $id_perfil_usuario;
	header('Location: home.php');
}
else {

	$_SESSION['autenticado'] = 'NAO';
	header('Location: index.php?erro=autenticacao');
}

?>