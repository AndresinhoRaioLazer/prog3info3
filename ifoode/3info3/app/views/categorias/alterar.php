<form method="post" action="?acao=alterar">

    <label for="nome">Nome</label>
    <input type="hidden" value="<?= $categoria->getIdCategoria(); ?>">
    <input type="text" name="nome" id="nome" value="<?= $categoria->getNome(); ?>"/><br>

    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao" cols="30" rows="3"></textarea><br>

    <input type="submit" name="gravar" value="Gravar"/>

</form>