<?php
session_start();
if(!$_SESSION){
    header("Location: ../login/app.php?permissaoNegada");
}
include('../../Controllers/Post.php');

if (!empty($_POST['title']) && (!empty($_POST['body'])) && (!empty($_POST['status']))) {
    $insert = $c->store($_POST['title'], $_POST['body'], $_POST['status']);
    header("Location: app.php?sucesso=envio");
    exit();
} else {
    header("Location: app.php?erro=envio");
    exit();
}
?>