<?php

// O Controlador é a peça de código que sabe qual classe chamar, para onde redirecionar e etc.
// Use o método $_GET para obter informações vindas de outras páginas.

//faça um require_once para o arquivo Produto.php
//faça um require_once para o arquivo CrudProduto.php
require_once "../models/Produto.php";
require_once "../models/CrudProdutos.php";

//quando um valor da URL for igual a cadastrar faça isso
if ( $_GET['acao'] == 'cadastrar'){

    $produto = //novo produto;
        //crie um objeto $crud
        $crud->salvar($produto);

    //redirecione para a página de produtos
}

//quando um valor da URL for igual a editar faça isso
if ($_GET['acao']== 'editar'){
    $crud = new CrudProdutos();
    $crud->editar($_GET['id']);

    echo "chamou o editar";

    //algoritmo para editar
    //redirecione para a página de produtos
}

//quando um valor da URL for igual a excluir faça isso
if ( $_GET['acao']== 'excluir'){
    $crud = new CrudProdutos();
    $crud->excluir($_GET['id']);
//
    header('location: ../views/admin/produtos.php');
}