<?php
class UserController extends BaseController {
    public function getAction() {
        $errorStr = '';
        $method = $_SERVER['REQUEST_METHOD'];

        if (strtoupper($method) == 'GET') {
            try {
                $userModel = new UserModel();
                $id = 0;
                if (isset($_GET["id"]) && $_GET["id"]) {
                    $id = $_GET["id"];
                }

                $usrarr = $userModel->getUser($id);
                $res = json_encode($usrarr);

                $this->sendData($res, array('HTTP/1.1 200 OK'));
            } catch(Error $e) {
                $errorStr = $e->getMessage();
                $this->sendData($errorStr, array('HTTP/1.1 500 Internal Server Error'));
            }
        }
    }

    public function addAction() {
        $errorStr = '';
        $method = $_SERVER['REQUEST_METHOD'];

        if (strtoupper($method) == 'POST') {
            try {
                $userModel = new UserModel();

                $userModel->addUser($_POST['user'], $_POST['email'], $_POST['pass']);

                $this->sendData(NULL, array('HTTP/1.1 200 OK'));
            } catch(Error $e) {
                $errorStr = e->getMessage();
                $this->sendData($errorStr, array('HTTP/1.1 500 Internal Server Error'));
            }
        }
    }
}
