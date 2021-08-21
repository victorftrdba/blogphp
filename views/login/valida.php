<?php
include('../../Controllers/User.php');
if(!$_SESSION){
    header("Location: ../login/app.php?permissaoNegada");
}
print_r($u->index());
foreach($user as $u) {
if($_POST['user'] === $u->user) {
    if($_POST['password'] === $u->password) {
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