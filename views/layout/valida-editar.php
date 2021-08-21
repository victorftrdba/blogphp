<?php
include('../../database/Configs.php');

    $c->edit($_POST['id'], $_POST['title'], $_POST['body'], $_POST['status']);
    header("Location: app.php?alterado=sucesso");

?>