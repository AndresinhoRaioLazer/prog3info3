<?php

require_once "../modelos/CrudCategoria.php";

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){
    case 'index':
        $crud = new CrudCategoria();
        $categorias = $crud->getCategorias();
        include '../views/templates/cab.php';
        include '../views/categorias/index.php';
        include '../views/templates/rod.php';
        break;

    case 'exibir':
        $id = $_GET['id'];
        $crud = new CrudCategoria();
        $categorias = $crud->getCategoria($id);
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
            $novaCat = new Categoria(null, $nome, $descricao);
            $crud = new CrudCategoria();
            $crud->InsertCategoria($novaCat);
            header('Location: categorias.php');
        }
        break;

    case 'alterar':
        if (!isset($_POST['gravar'])){
            $id = $_GET['id'];
            $crud = new CrudCategoria();
            $categoria = $crud->getCategorias();

            include '../views/templates/cab.php';
            include '../views/categorias/inserir.php';
            include '../views/templates/rod.php';
        }else {
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $novaCat = new Categoria(null, $nome, $descricao);
            $crud = new CrudCategoria();
            $crud->InsertCategoria($novaCat);
            header('Location: categorias.php');
        }
        break;


        default:
        echo "Ação inválida";

}

