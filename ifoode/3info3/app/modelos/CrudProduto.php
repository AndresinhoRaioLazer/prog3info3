<?php

class CrudProduto
{
    private $conexao;

    public function getProdutos(){
        //conexao
        $this->conexao = DBConnection::getConexao();

        $sql = "SELECT * from produto";

        $resultado = $this->conexao->query($sql);
        $produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $listaProdutos = [];
        foreach ($produtos as $produto) {
            $listaProdutos[] = new Produto($produto['id_produto'],$produto['nome_produto'],$produto['descricao_produto'],$produto['foto_produto'], $produto['preco_produto']);
        }

        return $listaProdutos;
    }

    public function getProduto(int $id){

        //faz conexao
        $this->conexao = DBConnection::getConexao();

        //criando consulta
        $sql = "select * from produto where id_produto=".$id;

        //executa a consulta
        $result = $this->conexao->query($sql);

        //transforma o resultado em array
        $produto = $result->fetch(PDO::FETCH_ASSOC);

        //instnciar um objeto do tipo produto com os valores recebidos
        $objpro = new Produto($produto['id_produto'],$produto['nome_produto'],$produto['descricao_produto'], $produto['foto_produto'], $produto['preco_produto']);

        //retorna objeto criado
        return $objpro;
    }

    public function InsertCategoria(Produto $pro){
        //conexao
        $this->conexao = DBConnection::getConexao();

        //inserir dado
        $sql = "insert into produto(nome_produto, descricao_produto, foto_produto, preco_produto) values ('{$pro->getNome()}', '{$pro->getDescricao()}', '{$pro->getFoto()}', '{$pro->getPreco()}')";

        //erro
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }

    }

    public function UpdateCategoria(Produto $pro){
        //conexao
        $this->conexao = DBConnection::getConexao();

        //atualizar dado
        $sql = "update produto set (nome_produto=$pro->getNome(), descricao_produto=$pro->getDescricao(), foto_produto=$pro->getFoto, preco_produto=$pro->getPreco()) where id_produto=$pro->getId()";

        //erro
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }

    }


    public function DeleteCategoria(Produto $pro){
        //conexao
        $this->conexao = DBConnection::getConexao();

        //deletar dado
        $sql = "delete from produto where id_produto=$pro->getId()";

        //erro
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }

    }
}