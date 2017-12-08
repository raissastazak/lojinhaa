<?php

require_once 'cabecalho.php';

require_once "../../models/CrudProdutos.php";

$crud = new CrudProdutos();

$produtos = $crud->getProdutos();

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); //consulte os slides.


$crud->getProduto($id);

//seguranca
$id = filter_input(INPUT_GET, 'codigo', FILTER_VALIDATE_INT); //consulte os slides.

$produto = $crud->getProduto($_GET['id']);

?>


    <h2>Editar Produtos</h2>
    <form action="../../controllers/controladorProduto.php?acao=editar&id=<?=$produto->id?>" method="post">
        <div class="form-group">
            <input value="<?= $produto->id?>" name="id" type="hidden" class="form-control" id="id" aria-describedby="id produto" placeholder="">
        </div>

        <div class="form-group">
            <label for="produto">Produto:</label>
            <input value="<?= $produto->nome?>" name="nome" type="text" class="form-control" id="produto" aria-describedby="nome produto" placeholder="">
        </div>

        <div class="form-group">
            <label for="preco">Preco</label>
            <input value="<?= $produto->preco?>"name="preco" type="number" step="0.01" class="form-control" id="preco" placeholder="">
        </div>

        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input value="<?= $produto->estoque?>"name="estoque" type="number" class="form-control" id="quantidade" placeholder="">
        </div>

        <div class="form-group">
            <label for="Categoria">Categoria</label>
            <select name="categoria" class="form-control" id="Categoria">
                <option value="Fruta">Fruta</option>
                <option value="Legume">Legume</option>
                <option value="Hortaliça">Hortaliça</option>
            </select>
        </div>
        <input type="hidden" value="<?=$id?>">
        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>

<?php require_once "rodape.php"; ?>