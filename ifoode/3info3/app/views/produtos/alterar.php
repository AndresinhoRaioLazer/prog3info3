<form method="post" action="?acao=alterar">

    <label for="nome">Nome</label>
    <input type="hidden" value="<?= $produto->getId(); ?>">
    <input type="text" name="nome" id="nome" value="<?= $produto->getNome(); ?>"/><br>
    <input type="text" name="nome" id="nome" value="<?= $produto->getDescricao(); ?>"/>
    <input type="text" name="nome" id="nome" value="<?= $produto->getFoto(); ?>"/>
    <input type="text" name="nome" id="nome" value="<?= $produto->getPreco(); ?>"/>

    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao" cols="30" rows="3"></textarea><br>

    <input type="submit" name="gravar" value="Gravar"/>

</form>