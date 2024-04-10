<?php
// CLASSE USER MODEL

class UserModel extends Database {
    public function getUser($id) {
        $usrarr = $this->select("SELECT id, username, email FROM users WHERE id=?", ["i", $id]);
        return isset($usrarr[0])? $usrarr[0] : null;
    }

    public function addUser($username, $email, $pw) {
        $this->executeStatement("INSERT INTO users (username, email, pass_hash) VALUES (?, ?, ?)", ["sss", $username, $email, password_hash($pw, PASSWORD_DEFAULT)]);
    }
}
