<?php  
$hoje = date('d/m/Y');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Ordem de Serviço</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stylee.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
</head>
<body>

	<div id="navbar">	
		<img id="logo" src="https://14bdainfmtz.eb.mil.br/images/simbolos_om/Logo_62_BI.png">
		<h1 id="navtitle">Solicitação de Serviço TI</h1>
	</div>

	<center>
		<form method="POST" action="redd.php">
			<br>
			<h2 id="formtitle">Solicitação</h2>
			<p id="nome"><b>Nome: </b><input id="boxnome" type="text" name="nome" placeholder="Digite seu nome..." required="required"></p>
			<p id="secao"><b>Seção: </b><select name="secao" id="selecbox">
					<option value="sfpc"><p>SFPC</p></option>
					<option value="RP"><p>RP</p></option>
					<option value="saude"><p>SAUDE</p></option>	
			</select></p>
			<p id="assunto"><b>Assunto: </b><input type="text" id="boxassunto" name="assunto" placeholder="Digite o assunto..." required="required"></p>
			<?php echo "<p style='color:white;'>$hoje</p>"; ?>
			<input id="enviar" type="submit" name="enviar">
		</form>
	</center>

</body>
</html>