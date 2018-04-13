<?php

class Categoria{
    private $id_categoria;
    private $nome;
    private $descricao;

    public function __construct($id_categoria=null,$nome=null,$descricao=null){
        $this->id_categoria = $id_categoria;
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    public function getIdCategoria()
    {
        return $this->id_categoria;
    }

    public function setIdCategoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }


}

