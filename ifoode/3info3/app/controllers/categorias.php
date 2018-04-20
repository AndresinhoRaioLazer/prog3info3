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
        include '../views/templates/cab.php';
        include '../views/categorias/inserir.php';
        include '../views/templates/rod.php';
        break;

    default:
        echo "Ação inválida";
}