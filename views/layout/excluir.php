<?php
session_start();
if(!$_SESSION){
    header("Location: ../login/app.php?permissaoNegada");
}
include('../../Controllers/Post.php');

$c->delete($_GET['id']);
header("Location: app.php?excluir=sucesso")
?>