
<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
<meta charset = "utf-8">
<title>Entradas e Saidas</Title>
</head>
<Body>
<div>
<topo><H1>Relatorio de Movimentações</H1></topo>
</br></br></br>

<center>
<?php

include_once ('config/conexao.php');


echo "<table border=1>";
echo "<tr>";
echo "<th>Cod Produto</th>";
echo "<th>Produto</th>";
echo "<th>Valor</th>";
echo "<th>Tipo</th>";
echo "<th>Quant</th>";
echo "<th>Natureza</th>";
echo "<th>Data da operação</th>";
echo "</tr>";

$sql = "select*from produtos";
$resultado = mysqli_query($conexao, $sql) or die ("Erro ao acesar o Banco de Dados");
while ($registro = mysqli_fetch_array($resultado)){
	
	$cod = $registro['ProdId'];
	$nome = $registro['ProdNome'];
	$valor = $registro['ProdValor'];
	$tipo = $registro['ProdTipo'];
	$qnt = $registro['ProdQnt'];
	$natureza = $registro['ProdNatureza'];
	$data = $registro['ProdData'];
	
	echo "<tr>";
	echo "<th>$cod</th>";
	echo "<th>$nome</th>";
	echo "<th>$valor</th>";
	echo "<th>$tipo</th>";
	echo "<th>$qnt</th>";
	echo "<th>$natureza</th>";
	echo "<th>$data</th>";
	echo "</tr>";
	
}

echo "</table>";
?>
</center>
</br></br>
<link>
<a href="index.php">Voltar</a>
</link>
</div>
</form>
</body>
</html>