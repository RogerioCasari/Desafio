<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
<meta charset = "utf-8">
<title>Entradas e Saidas</Title>
</head>
<Body>
<div>
<topo><H1>Informaçoes salvas com sucesso</H1></topo>
</br></br></br>
<?php
include_once ('config/conexao.php');
$ProdNome =$_POST['nome'];
$ProdValor=$_POST['valor'];
$ProdTipo=$_POST['tipo'];
$ProdQnt=$_POST['quantidade'];
$ProdNatureza=$_POST['natureza'];
$ProdData=$_POST['data'];

$SalvarDados = "insert into Produtos
(ProdNome, ProdValor, ProdTipo, ProdQnt, ProdNatureza)
VALUES
('$ProdNome', '$ProdValor','$ProdTipo','$ProdQnt','$ProdNatureza')";

$Salvar = mysqli_query($conexao, $SalvarDados);

header("Localização: movimentacao.php");



?>
Caso voce não seja redirecionado <a href="movimentacao.php">clique aqui</a>

</div>
</form>
</body>
</html>