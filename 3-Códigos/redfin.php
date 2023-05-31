<?php  
include_once('conphp.php');
error_reporting(0);

$id = $_POST['id'];
$hoje = date('d/m/Y');
$nota = $_POST['nota'];
$sit = $_POST['sit'];

switch ($_POST['tec']) {
	case 'tec1':
		$tech = "TECNICO 1";
		break;
	case 'tec2':
		$tech = "TECNICO 2";
		break;
	case 'tec3':
		$tech = "TECNICO 3";
		break;
}

  
if ($_POST['tec'] != "tec1" && $_POST['tec'] != "tec2" && $_POST['tec'] != "tec3") {
		header('location: fina.php');
}

else{	

switch ($sit) {
	case 'concluido':
		$query = mysqli_query($conn, "INSERT INTO concluido(id,nome,secao,assunto) SELECT id,nome,secao,assunto FROM solicitacao WHERE id='$id';");
		$qry = mysqli_query($conn, "UPDATE concluido SET data_conc='$hoje',nota='$nota', tec='$tech' WHERE id='$id';");
		break;
	case 'pendente':
		$query = mysqli_query($conn, "INSERT INTO pendente(id,nome,secao,assunto) SELECT id,nome,secao,assunto FROM solicitacao WHERE id='$id';");
		$qry = mysqli_query($conn, "UPDATE pendente SET data='$hoje',nota='$nota', tec='$tech' WHERE id='$id';");
		break;
	case 'externo':
		$query = mysqli_query($conn, "INSERT INTO externo(id,nome,secao,assunto) SELECT id,nome,secao,assunto FROM solicitacao WHERE id='$id';");
		$qry = mysqli_query($conn, "UPDATE externo SET data='$hoje',nota='$nota', tec='$tech' WHERE id='$id';");
		break;
};
	

$result = mysqli_query($conn, "DELETE FROM solicitacao WHERE id='$id';");

}
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
			<h1>Chamado Finalizado!</h1>
			<br>
			<p>Esse chamado foi fechado com sucesso,<br>volte para aba de chamados...</p>
			<a href="novo.php">novo.php</a>
		</div>
	</center>

</body>
</html>