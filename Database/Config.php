<?php
namespace Database\Config;
use PDO;

class Database {
    protected $server = 'mysql:dbname=blogphp;host=localhost';
    protected $user = 'root';
    protected $pass = '';

    public function conn() {
        try {
            $pdo = new PDO($this->server, $this->user, $this->pass);
        } catch (Exception $e) {
            echo "Um erro foi encontrado: ".$e->getMessage();
        }
    }
}