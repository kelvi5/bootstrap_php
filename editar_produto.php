<?php
include 'conexao.php';

    $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula de Bootstrap com PHP</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    

    <style type="text/css">

    body{
        background-color: blanchedalmond;
    }

    #tamanhoContainer{
        width: 500px;
    }

    #botaoCadastrar:hover{
        background-color: aquamarine;
       /* background-image: url("https://img.icons8.com/material-outlined/24/000000/contact-card.png");*/
        color: rgb(255, 255, 255);
        border: 1px solid;
    }
    
    </style>
</head>
<body>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
    <h4>Formulário de Cadastro</h4>
        <form action="atualizar_dados.php" method="POST" style="margin-top: 20px;">

        <?php
            $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
            $buscar = mysqli_query($conexao, $sql);
            while($array = mysqli_fetch_array($buscar)){

                $id_estoque = $array['id_estoque'];
                $nroProduto = $array['nroProduto'];
                $nomeproduto = $array['nome_produto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];
        
        
        ?>
        <div class="form-group">
            <label>Numero do Produto</label>
            <input type="number" class="form-control" name="nroProduto" value="<?php echo $nroProduto ?>" disabled>
            <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
        </div>
        <div class="form-group">
                <label>Nome Produto</label>
                <input type="texto" class="form-control" name="nomeProduto" value="<?php echo $nomeproduto ?>">
            </div>
            <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria" value="<?php echo $categoria ?>">
                      <option>Perifericos</option>
                      <option>Hardware</option>
                      <option>Software</option>
                      <option>HeadSet</option>
                    </select>
                  </div>

            <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade?>">
                </div>
                <div class="form-group">
                        <label>Fornecedor</label>
                        <select class="form-control" name="fornecedor" value="<?php echo $fornecedor ?>">
                          <option>Fornecedor A</option>
                          <option>Fornecedor B</option>
                          <option>Fornecedor C</option>
                        </select>
                      </div>
                      <div style="text-align: right;">
                      <button type="submit" class="btn btn-success btn-sm" id="botaoCadastrar">Atualizar</button>
                      </div>
    </form>
            <?php }?>
    </div>
    <script type="text/javascript" href="bootstrap/js/bootstrap.js"></script>
</body>
</html>