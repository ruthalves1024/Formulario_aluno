<!DOCTYPE html>
<html lang="pt - br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senact</title>
</head>
<body>
    <h2> Cadastro de Matrícula do Aluno </h2>
<?php
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$data = $_POST["data"];
$matricula = $_POST["matricula"];
$endereco = $_POST["endereco"];
$curso=$_POST["curso"];
?>
<h3> Nome do Aluno: <?=$nome?></h3><br>
<h3> CPF do Aluno: <?=$cpf?> </h3><br>
<h3> Data de Nascimento do Aluno: <?=$data?> </h3><br>
<h3> Matrícula do Aluno: <?=$matricula?> </h3><br>
<h3> Endereço do Aluno: <?=$endereco?> </h3><br>
<h3> Curso do Aluno: <?=$curso?> </h3><br>
</body>
</html 
