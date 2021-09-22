<?php

// Substituindo a ocorrência de #
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

// Montando o texto
$texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

// Abrindo um arquivo para registro
$arquivo = fopen('registros/registros.txt', 'a');

// Registrando o texto no arquivo
fwrite($arquivo, $texto);

// Fechando o arquivo
fclose($arquivo);

header('Location: abrir_chamado.php');
?>