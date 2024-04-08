<?php
class ViewController extends BaseController {
    public function rootAction() {
        $errorStr = '';
        $method = $_SERVER['REQUEST_METHOD'];

        if (strtoupper($method) == 'GET') {
            try {
                $this->sendData("<h1>Cacca</h1>", array('HTTP/1.1 200 OK'));
            } catch(Error $e) {
                $errorStr = $e->getMessage();
                $this->sendData($errorStr, array('HTTP/1.1 500 Internal Server Error'));
            }
        }
    }
}