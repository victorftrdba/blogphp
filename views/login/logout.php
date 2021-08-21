<?php
session_start();
if(!$_SESSION){
    header("Location: ../login/app.php?permissaoNegada");
}
session_destroy();
header("Location: app.php?logoffSucesso");
?>