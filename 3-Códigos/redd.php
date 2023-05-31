<?php  
include_once('conphp.php');
error_reporting(0);

$nome = $_POST['nome'];
$secao = $_POST['secao'];
$assunto = $_POST['assunto'];
$hoje = date('d/m/Y');


$result = mysqli_query($conn, "INSERT INTO solicitacao(nome,secao,assunto,data) VALUES ('$nome', '$secao', '$assunto', '$hoje');");


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Confirmação</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stilo.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
</head>
<body>

	<center>
		<div id="redd">
			<img id="imgredd" src="https://cdn-icons-png.flaticon.com/512/3699/3699516.png">
			<h1>CONFIRMAÇÃO DE CHAMADO!</h1>
			<br>
			<p>Sua solicitação para equipe de TI foi feita com sucesso,<br>aguarde a visita de um técnico...</p>
			<a href="https://google.com">intranet.62bi.eb.mil.br</a>
		</div>
	</center>

</body>
</html>