<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
<meta charset = "utf-8">
<title>Entradas e Saidas</Title>
</head>
<Body>
<div>
<topo><H1>Controle de Movimentações</H1></topo>
</br></br></br>
<texto>


<form method="POST" action="Salvar.php">


<fieldset><legend>Cadastro de movimentações</legend>

<p><destaque>*</destaque>Nome do produto: <input type="text" name="nome" size="15" placeholder="Digite o Nome do Produto" required></p>
<p><destaque>*</destaque>Tipo do Produto: <input type="text" name="tipo" size="15" placeholder="Tipo do produto" required></p>
<p><destaque>*</destaque>Valor Unitario: <input type="int" name="valor" size="5" placeholder="Valor Unitario do Produto" required></p>
<p><destaque>*</destaque>Quantidade: <input type="int" name="quantidade" size="5" placeholder="Digite a quantidae" required></p>
<p><destaque>*</destaque>Data da operação: <input type="date" name="data" id="fdata"></p>

</fieldset>
<?php
function invertDate( $date, $separator ) {
    return implode( $separator, array_reverse( explode( $separator, $date ) ) );
}
?>
<fieldset><legend>Natureza da Operação</legend>
<input type="radio" name="natureza" id="venda" value="V"checked/><label for="venda">Venda
<input type="radio" name="natureza" id="compra" value="C"/><label for="compra">Compra
</fieldset>
</br>

</texto>
</div>
<input type="submit" value="Enviar">
</form>
</br></br>
<link>
<a href="index.php">Voltar</a>
</link>
</bory>
</html>