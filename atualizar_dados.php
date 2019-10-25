<?php
    include 'conexao.php';
    $id = $_POST['id'];
    //$nroProduto = $_POST['nroProduto'];
    $nomeProduto = $_POST['nomeProduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];

    $sql  = "UPDATE `estoque` SET `nome_produto`='$nomeProduto',`categoria`='$categoria',`quantidade`= $quantidade,`fornecedor`='$fornecedor' WHERE id_estoque = $id";

    $atualizar = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<div class="container" style="width: 400px">
    <center>
        <h3>Atualizado com sucesso</h3>
        <div style="margin-top">
        <a href="_listar_produtos.php" class="btn btn-sm btn-warning" style="color: #fff">voltar</a>
</div>
</center>
</div>