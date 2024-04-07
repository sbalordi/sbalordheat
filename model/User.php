<?php
// CLASSE USER MODEL

class UserModel extends Database {
    public function getUser($id) {
        return $this->select("SELECT id, username, email FROM users WHERE id=?", ["i", $id]);
    }

    public function addUser($username, $email, $pw) {
        $this->select("INSERT INTO users (username, email, pass_hash) VALUES (?, ?, ?)", ["s", $username, "s", $email, "s", password_hash($pw, PASSWORD_DEFAULT)]);
    }
}
