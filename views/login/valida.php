<?php
if($_SESSION) {
    header("Location: ../layout/app.php?jaLogado");
}
try {
$pdo = new PDO('mysql:dbname=blogphp;host:localhost', 'root', '');
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$stmt = $pdo->prepare('SELECT * FROM users WHERE user = :user');
$stmt->bindValue(":user", $_POST['user']);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_OBJ);
} catch (Exception $e) {
    "Erro encontrado ".$e->getMessage();
}

if($result->user && trim(md5($_POST['password'])) == trim($result->password)) {
    echo "Logou";
    session_start();
    $_SESSION['user'] = $result->user;
    header("Location: ../layout/app.php?loginSucesso");
    session_start();
} else {
    echo "Não logou";
    header("Location: app.php?loginErro");
    exit();
}

?>