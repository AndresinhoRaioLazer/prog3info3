<h1>Categorias</h1>

<a href="?acao=inserir"> Inserir Categorias</a>

    <table>
        <tr>
            <th>#</th>
            <th>Nome da Categoria</th>
        </tr>

        <?php foreach($categorias as $categoria): ?>
        <tr>
            <td><?= $categoria->getIdCategoria(); ?></td>
            <td><a href="?acao=exibir&id=<?= $categoria->getIdCategoria(); ?>" ><?= $categoria->getNome(); ?></a></td>
        </tr>

        <?php endforeach; ?>
    </table>
