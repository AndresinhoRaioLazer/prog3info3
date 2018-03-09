<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ifoode</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php
//$conexao = new PDO("mysql:host=localhost;dbname=3info");
//$sql = "select id_categoria, nome_categoria from categoria order by nome_categoria";
//$result = $conexao->query($sql);
//
//foreach ($result as $categoria) {
//    echo ""
//}
//?>

<?php
include "cabecalho.php";
?>

<div>
    <form method="post" action="produtos.php">
        <input type="text" name="busca" placeholder="Pesquise um produto">
        <input type="submit" value="Buscar">
    </form>
    <br>
    <br>
    <br>
</div>

<div>

    <?php

    if(isset($_GET['erro']) and $_GET['erro']==1){
        echo ('<img src="img/erro.jpg">');
    }
    ?>

    <?php

    if (!isset($_SESSION['nome'])){
    ?>

    <h2>Login</h2>
    <form method="post" action="valida.php">
        <input type="text" name="login" placeholder="Usuário">
        <input type="password" name="senha" placeholder="Senha">
        <input type="submit" value="Entrar">
    </form>
    <br>
    <br>
    <br>
</div>
<?php
}else {
    ?>


    <h4>Bem vindo!! <?= $_SESSION['nome'] ?> |  <button><a href="logout.php" style="text-decoration:none">Logout</button></h4>

    <?php
}
?>

<?php
include "rodape.php";
?>

</body>
</html>