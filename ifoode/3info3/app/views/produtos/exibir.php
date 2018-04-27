

<h1>Detalhes da Categoria - <?= $produto->getNome(); ?></h1><br>

<p>Descrição: <?= $produto->getDescricao(); ?></p>
<p>Descrição: <?= $produto->getFoto(); ?></p>
<p>Descrição: <?= $produto->getPreco(); ?></p>

<a href="produtos.php?acao=alterar&id=">Editar |</a><a href="produtos.php?acao=exluir">Excluir</a>