<?php
// CLASSE USER MODEL

class UserModel extends Database {
    public function getUser($id) {
        $usrarr = $this->select("SELECT id, username, email, nome, cognome, azienda FROM users WHERE id=?", ["i", $id]);
        return isset($usrarr[0])? $usrarr[0] : null;
    }

    public function addUser($username, $email, $pw, $nome, $cognome, $azienda){
        $this->executeStatement("INSERT INTO users (username, email, pass_hash, nome, cognome, azienda) VALUES (?, ?, ?, ?, ?, ?)", ["ssssss", $username, $email, password_hash($pw, PASSWORD_DEFAULT), $nome, $cognome, $azienda]);
    }

    public function login($email, $pw) {
        $usrarr = $this->select("SELECT id, pass_hash FROM users WHERE email=?", ["s", $email]);
        if (!isset($usrarr[0])) {
            throw new Exception("Utente non trovato");
        }
        if (isset($usrarr[0]) && password_verify($pw, $usrarr[0]["pass_hash"])) {
            return $usrarr[0]["id"];
        }
        return null;
    }
    public function logout() {
        if (session_id() != '' || isset($_SESSION)) {
            session_unset();
            session_destroy();
            header("Location: /login");
        }
    }
}
