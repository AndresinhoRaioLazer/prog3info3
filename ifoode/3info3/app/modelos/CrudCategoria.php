<?php

require_once 'DBConnection.php';

class CrudCategoria
{
    private $conexao;

    public function getCategorias(){
        //conexoa
        $this->conexao = DBConnection::getConexao();

        $sql = "SELECT * from categoria";

        $resultado = $this->conexao->query($sql);
        $categorias = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $listaCategorias = [];
        foreach ($categorias as $categoria) {
            $listaCategorias[] = new Categoria($categoria['id_categoria'],$categoria['nome_categoria'],$categoria['descricao_categoria']);
        }

        return $listaCategorias;
        //select
        //return
    }
}

$crud = new CrudCategoria();
$cats = $crud->getCategorias();

print_r($cats);