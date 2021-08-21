<?php
include('../../Controllers/User.php');
if(!$_SESSION){
    header("Location: ../login/app.php?permissaoNegada");
}
foreach($user as $u) {
if($u->user = $_POST['user']) {
    if($u->password = $_POST['password']) {
    session_start();
    echo "Usuário encontrado!";
    $_SESSION['user'] = $_POST['user'];
    header("Location: ../layout/app.php?loginSucesso");
    exit();
    }
    else {
        echo "Senha incorreta!";
        header("Location: app.php?loginErro");
        exit();
    }
} else {
    echo "Usuário incorreto!";
    header("Location: app.php?loginErro");
    exit();
    }
}
?>