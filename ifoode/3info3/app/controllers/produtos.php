<?php

require_once "../modelos/CrudProduto.php";

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){
    case 'index':
        $crud = new CrudProduto();
        $produtos = $crud->getProdutos();
        include '../views/templates/cab.php';
        include '../views/categorias/index.php';
        include '../views/templates/rod.php';
        break;

    case 'exibir':
        $id = $_GET['id'];
        $crud = new CrudProduto();
        $produtos = $crud->getProduto($id);
        include '../views/categorias/exibir.php';
        break;

    case 'inserir':
        if (!isset($_POST['gravar'])){
            include '../views/templates/cab.php';
            include '../views/categorias/inserir.php';
            include '../views/templates/rod.php';
        }else{
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $foto = $_POST['foto'];
            $preco = $_POST['preco'];
            $novaPro = new Produto(null, $nome, $descricao, $foto, $preco);
            $crud = new CrudProduto();
            $crud->InsertProduto($novaPro);
            header('Location: produtos.php');
        }
        break;

    case 'alterar':
        if (!isset($_POST['gravar'])){
            $id = $_GET['id'];
            $crud = new CrudProduto();
            $produto = $crud->getProdutos();

            include '../views/templates/cab.php';
            include '../views/categorias/inserir.php';
            include '../views/templates/rod.php';
        }else {
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $foto = $_POST['foto'];
            $preco = $_POST['preco'];
            $novaPro = new Produto(null, $nome, $descricao, $foto, $preco);
            $crud = new CrudProduto();
            $crud->InsertProduto($novaPro);
            header('Location: produtos.php');
        }
        break;


    default:
        echo "Ação inválida";

}

