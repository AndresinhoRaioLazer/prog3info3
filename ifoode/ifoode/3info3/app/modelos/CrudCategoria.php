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
    }

    public function getCategoria(int $id){

        //faz conexao
        $this->conexao = DBConnection::getConexao();

        //criando consulta
        $sql = "select * from categoria where id_categoria=".$id;

        //executa a consulta
        $result = $this->conexao = query($sql);

        //transforma o resultado em array
        $categoria = $result->fetch(PDO::FETCH_ASSOC);

        //instnciar um objeto do tipo categoria com os valores recebidos
        $objcat = new Categoria($categoria['id_categoria'],$categoria['nome_categoria'],$categoria['descricao_categoria']);

        //retorna objeto criado
        return $objcat;
    }

    public function InsertCategoria(Categoria $cat){
        //conexao
        $this->conexao = DBConnection::getConexao();

        //inserir dado
        $sql = "insert into categoria (nome_categoria, descricao_categoria) values ('{$cat->getNome()}', '{$cat->getDescricao()}')";

        //erro
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }

    }

    public function UpdateCategoria(Categoria $cat){
        //conexao
        $this->conexao = DBConnection::getConexao();

        //atualizar dado
        $sql = "update categoria set (nome_categoria=$cat->getNome(), descricao_categoria=$cat->getDescricao()) where id_categoria=$cat->getId()";

        //erro
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }

    }


    public function DeleteCategoria(Categoria $cat){
        //conexao
        $this->conexao = DBConnection::getConexao();

        //deletar dado
        $sql = "delete from categoria where id_categoria=$cat->getId()";

        //erro
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }

    }
}

$crud = new CrudCategoria();
$cats = $crud->getCategorias();

print_r($cats);