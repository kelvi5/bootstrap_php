<?php
    include 'conexao.php';

    $nroProduto = $_POST['nroProduto']; //Recebe o valor do atributo  através do formulario
    $nomeProduto = $_POST['nomeProduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];
    

    // echo $nomeProduto; //teste unitário

    $sql = "INSERT INTO `estoque`(`nroProduto`, `nome_produto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroProduto,'$nomeProduto','$categoria',$quantidade,'$fornecedor')";
    $inserir = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<div class="container" style="width: 500px; margin-top: 5px;">
    <h4>Produto Adicionado com Sucesso!</h4>
        <div style="padding-top: 20px center;">
            <center>
            <a href="index.html" role="button" class="btn btn-sm btn-primary">Cadastrar novo item!</a>
            </center>    
        </div>
</div>