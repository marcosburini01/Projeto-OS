<?php 

include("conphp.php");
$sql = mysqli_query($conn, "Select * From solicitacao;");

$t = "<a href='fina.php'><p>EDITAR</p></a>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Chamados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="stylo.css">
</head>
<body style="background-color: #DCDCDC;">

  <div id="navbar"> 
    <img id="logo" src="https://14bdainfmtz.eb.mil.br/images/simbolos_om/Logo_62_BI.png">
    <h1 id="navtitle">NOVOS CHAMADOS TI</h1>
  </div>

  <div id="botoes">

    <div id="nov"><a style="color:black" href="novo.php"><h3>NOVOS</h3></a></div>
    <div id="con"><a href="conc.php"><h3>CONCLUIDOS</h3></a></div>
    <div id="pen"><a href="pen.php"><h3>PENDENTES</h3></a></div>
    <div id="ex"><a href="externo.php"><h3>EXTERNOS</h3></a></div>
    
  </div>

	<center>
	<form method="POST">
		<table class="table table-bordered">
  				<thead>
    				<tr>
      				<th scope="col"><p>N°</p></th>
      				<th scope="col"><p>NOME</p></th>
      				<th scope="col"><p>SEÇÃO</p></th>
      				<th scope="col"><p>ASSUNTO</p></th>
              <th scope="col"><p>DATA</p></th>
              <th scope="col"><p>EDITAR</p></th>
    				</tr>
  				</thead>
  				<tbody>
    				<?php 
            while($escrever=mysqli_fetch_array($sql)){

            /*Escreve cada linha da tabela*/
            echo "<tr><td><p>" . $escrever['id'] . "</p></td><td><p>" . $escrever['nome'] . "</p></td><td><p>" . $escrever['secao'] . "</p></td><td><p>" . $escrever['assunto'] . "</p></td><td><p>" . $escrever['data'] . "</p></td><td><p>" . $t .  "</p></td></tr>";

            }
?>
  				</tbody>
		</table>
	</form>
	</center>
</body>
</html>

