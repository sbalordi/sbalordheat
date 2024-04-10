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

    public function login($email, $pw) {
        $usrarr = $this->select("SELECT id, pass_hash FROM users WHERE email=?", ["s", $email]);
        if (isset($usrarr[0]) && password_verify($pw, $usrarr[0]["pass_hash"])) {
            $_SESSION["email"] = $usrarr[0]["id"];
            header("Location: /");
        }
    }
}
