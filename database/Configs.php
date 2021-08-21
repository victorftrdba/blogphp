<?php

namespace Database\Configs;
use PDO;

class Database {
    protected $server = 'mysql:dbname=blogphp;host=localhost';
    protected $user = 'root';
    protected $pass = '';

    public function index() {
        try {
        $pdo = new PDO($this->server, $this->user, $this->pass);
        $stmt = $pdo->prepare('SELECT * FROM posts');
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            echo "Um erro foi encontrado: ". $e->getError();
        }

        return $result;
    }

    public function store($title, $body, $status) {
        try {
        $pdo = new PDO($this->server, $this->user, $this->pass);
        $stmt = $pdo->prepare("INSERT INTO posts (title, body, status) VALUES (?, ?, ?)");
        $stmt->execute([$title, $body, $status]);
        echo "Dado enviado com sucesso";
        } catch(Exception $e) {
            echo "Um erro foi encontrado: " . $e->getMessage();
        }
    }

    public function delete($id) {
        try {
        $pdo = new PDO($this->server, $this->user, $this->pass);
        $stmt = $pdo->prepare("DELETE FROM posts WHERE id = ?");
        $stmt->execute([$id]);
        } catch(Exception $e) {
            echo "Um erro foi encontrado: " . $e->getMessage();
        }
    }

    public function edit($id, $title, $body, $status) {
        try {
        $pdo = new PDO($this->server, $this->user, $this->pass);
        $data = [
            'id' => $id,
            'title' => $title,
            'body' => $body,
            'status' => $status,
        ];
        $stmt = $pdo->prepare("UPDATE posts SET title = :title, body = :body, status = :status WHERE id = :id");
        $stmt->execute($data);
        } catch(Exception $e) {
            echo "Um erro foi encontrado: " . $e->getMessage();
        }
        }
    }

$c = new Database;
$show = $c->index();