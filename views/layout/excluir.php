<?php
include('../../database/Configs.php');

$c->delete($_GET['id']);
header("Location: app.php?excluir=sucesso")
?>