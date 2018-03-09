<?php
 session_start();

function verificaLogin($login, $senha){
    if ($login=='admin' and $senha=='admin'){
        return true;
    }else{
        return false;
    }
}

if (verificaLogin($_POST['login'],$_POST['senha'])){
    $_SESSION['nome'] = "ANDREZINHO";
    $_SESSION['email'] = "andrezinho@gmailpocutom";
    header('Location: index.php');
}else{
    header('Location: index.php?erro=1');
}

?>