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

?>