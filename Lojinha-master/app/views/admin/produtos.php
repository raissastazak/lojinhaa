<?php

    require_once __DIR__."/../../models/CrudProdutos.php";
    $crud = new CrudProdutos();

    $listaProdutos = $crud->getProdutos();

    require_once 'cabecalho.php';

?>
<!--Barra de busca-->

<div class="col-md-12">
        <div class="input-group">


                <input type="text" name="nome_buscado" class="form-control" placeholder="Digite o nome do produto" aria-describedby="basic-addon2">
                <button type="submit" class="input-group-addon" id="basic-addon2">Buscar</button>

        </div>
    </div>
<br>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Estoque</th>
        <th>Categoria</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($listaProdutos as $produto): ?>
        <tr>
            <th scope="row"><?= $produto->id ?></th>
            <td><?= $produto->nome ?></td>
            <td><?= $produto->preco ?></td>
            <td><?= $produto->estoque ?></td>
            <td><?= $produto->categoria ?></td>
            <td><a href="editar-produto.php?id=<?= $produto->id ?>">editar</a> |<a href="../../controllers/controladorProduto.php?acao=excluir&id=<?= $produto->id ?>">remover</a></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

<?php require_once "rodape.php"; ?>