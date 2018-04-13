<?php

if (isset($_GET['cat'])){
    if ($_GET['cat']==1){
        $categoria = "Frutos do Mar";
    }elseif ($_GET['cat']==2){
        $categoria = "Calóricos";
    }elseif ($_GET['cat']==3){
        $categoria = "Japonês";
    }elseif ($_GET['cat']==4){
        $categoria = "Vegetariano";
    }elseif ($_GET['cat']==5){
        $categoria = "alguem vamo no sãbley";
    }else{
        $categoria = "Categoria Inexistente";
    }
}elseif (isset($_POST['busca'])){
    $categoria = "Não foi encontrado nenhum produto com o termo".$_POST['busca'];
}else{
    $categoria = "Opção inválida";
}
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
//
//$texto = "";
//if (isset($_GET['cat'])){
//    $categoria = $_GET['cat'];
//    $texto = $categoria;
//}elseif (isset($_GET['busca'])){
//    $busca = $_POST['busca'];
//    $texto = "Resultados encontrados: ".$busca;
//}
//echo $texto;
//
//?>

<?php
include "cabecalho.php";
?>

<h2><?= $categoria ?></h2>

<?php
include "rodape.php";
?>

</body>
</html>


