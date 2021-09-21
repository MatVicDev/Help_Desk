<?php

$autenticado = false;

$usuarios = [
	array('email' => 'admin@teste.com', 'senha' => 'admin'),
	array('email' => 'user@teste.com', 'senha' => 'user'),
];

foreach($usuarios as $user) {

	if($_POST['email'] == $user['email'] && $_POST['senha'] == $user['senha']) {
		
		$autenticado = true;		
	} 
}

if($autenticado)
	echo "Usuário autenticado!";
else
	header('Location: index.php?erro=autenticacao');

?>