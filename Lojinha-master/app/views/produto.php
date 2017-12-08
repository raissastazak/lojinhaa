<?php

    require_once "../models/CrudProdutos.php";

    $crud = new CrudProdutos();

    //seguranca
    $codigo = filter_input(INPUT_GET, 'codigo', FILTER_VALIDATE_INT); //consulte os slides.

    $produto = $crud->getProduto($codigo);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lojão do IFC</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/ifc-style.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="../../assets/imagens/jr.png" alt="" width="80px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../../">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container product-content">

    <!-- Page Features -->
    <div class="row">

        <div class="col-md-5">
            <img src="../../assets/imagens/product-default.png" alt="" class="img-fluid">
        </div>

        <div class="col-md-7">
            <div class="row">
                <div class="col-md-12">
                    <h2><?= $produto->nome; ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <span class="badge badge-primary"><?=$produto->categoria?></span>
                    <span class="badge badge-warning"><?=$produto->estaDisponivel()?></span>
                </div>
            </div>
            <!-- end row -->

            <div class="row description-wrapper">
                <div class="col-md-12">
                    <p class="description">Consectetur adipisicing elit. Accusantium ad, adipisci commodi delectus ea eius eligendi expedita in ipsum magnam modi mollitia nisi, obcaecati perspiciatis quae quo repellendus temporibus velit.
                    </p>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-md-12 bottom-rule">
                    <h2 class="product-price">R$<?=$produto->preco?></h2>
                </div>
            </div>
            <!-- end row -->

            <div class="row add-to-cart">
                <div class="col-md-5 product-qty">
                    <form action="../controllers/controladorProduto.php?acao=comprar" method="post">
                        <div class="form-group">
                            <input value="<?= $produto->id?>" name="id" type="hidden" class="form-control" id="id" aria-describedby="id produto" placeholder="">

                            <input value="<?= $produto->estoque?>" name="estoque" type="hidden" class="form-control" id="id" aria-describedby="quantidade estoque" placeholder="">

                        </div>

                        <?php 

                        if ($produto->estoque > 0){

                            echo "<input name='quantidade' class='btn btn-default btn-lg btn-qty' value='1' />";

                            echo "<button type='submit' class='btn btn-primary'>Comprar</button>";

                        } ?>

                    </form>
                </div>
            </div><!-- end row -->

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Instituto Federal Catarinense de Educação, Ciência e Tecnologia</p>
    </div>
    <!-- /.container -->
</footer>

</body>

</html>
