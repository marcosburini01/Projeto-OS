<?php 


$conc = "concluido";
$pen = "pendente";
$ext = "externo";
$hoje = date('d/m/Y');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Finalização</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="finastylee.css">
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
		<h1 id="navtitle">Finalização Chamado</h1>
	</div>

	<center>
		<form method="POST" action="redfin.php">
			<br>
			<h2 id="formtitle">Situação</h2>
			<p id="id"><b>N°: </b><input id="boxnome" type="number" name="id" placeholder="Digite o N° do chamado..." required="required"></p>
			<p id="final"><b>Final: </b><select name="sit" id="selecbox">
					<option value="concluido"><p>CONCLUIDO</p></option>
					<option value="pendente"><p>PENDENTE</p></option>
					<option value="externo"><p>EXTERNO</p></option>	
			</select></p>
			<p id="nota"><b>Nota: </b><input type="text" id="boxassunto" name="nota" placeholder="Digite a nota do chamado..." required="required"></p>
			<?php echo "<p style='color:white;'>$hoje</p>"; ?>
			<p id="id"><b>TEC: </b><input id="boxnome" type="password" name="tec" placeholder="Digite o codigo tecnico..." required="required"></p>
			<input id="enviar" type="submit" name="enviar">
		</form>
	</center>

</body>
</html>