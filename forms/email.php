<?php

include("conexao.php");

$nome= filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$telefone=filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


//echo "Nome:".$nome."<br/>Telefone: ".$telefone. "</br>";

$result_usuario = "INSERT INTO usuarios_form (nome, telefone, email, created) VALUES ('$nome', '$telefone', '$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn))

?>