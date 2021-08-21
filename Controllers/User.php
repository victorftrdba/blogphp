<?php 
namespace Controllers\User;
use Database\Config;
use PDO;

class User {
    protected $server = "mysql:dbname=blogphp;host:localhost";
    protected $user = "root";
    protected $pass = "";

    public function index() {
        try {
            $pdo = new PDO($this->server, $this->user, $this->pass);
            $stmt = $pdo->prepare('SELECT * FROM users');
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            echo "Erro encontrado: ".$e->getMessage();
        }

        return $result;
    }

    public function register() {

    }
}

$u = new User;
$user = $u->index();

?>