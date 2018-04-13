<?php

require_once "../modelos/CrudCategoria.php";

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){
    case 'index';
        $crud = new CrudCategoria();
        $categorias = $crud->getCategorias();

        include "../views/categorias/index.php";

        break;
    case 'inserir';
        echo 'Você escolheu INSERIR';
        break;
    default:
        echo "Ação inválida";

}