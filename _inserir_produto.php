<?php

include "conexao.php";

$nroproduto = $_POST["nroproduto"]; //recebe o valor do atributo
$nomeproduto = $_POST["nomeproduto"];
$categoria = $_POST["categoria"];
$quantidade = $_POST["quantidade"];
$fornecedor = $_POST["fornecedor"];

$sql = "INSERT INTO `estoque`(`nroproduto`,`nomeproduto`, `categoria`, `quantidade`, `fonecedor`) VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width:600px; margin-top: 20px;">
<center>
<h4 class="btn-success btn-block">Produto adicionado com sucesso</h4>
</center>

<div style="padding-top: 20px;">
<center>
<a href="index.php" role="buton" class="btn btn-sm btn-primary">Cadastrar novo item</a>
</center>
</div>

</div>