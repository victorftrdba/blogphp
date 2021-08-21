<?php
session_start();
if(!$_SESSION){
    header("Location: ../login/app.php?permissaoNegada");
}
include('../../Controllers/Post.php');

    $c->edit($_POST['id'], $_POST['title'], $_POST['body'], $_POST['status']);
    header("Location: app.php?alterado=sucesso");

?>