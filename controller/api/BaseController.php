<?php
class BaseController {
    // __call è un metodo magico che viene chiamato quando si prova a chiamare un metodo che è inaccessibile
    public function __call($name, $arguments) {
        $this->sendData('', array('HTTP/1.1 404 Not Found'));
    }

    protected function getUriSegments() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = explode('/', $uri);
        
        return $uri;
    }
    protected function getQueryStringParams() {
        return parse_str($_SERVER['QUERY_STRING'], $query);
    }
    
    protected function sendData($data, $headers = array()) {
        header_remove('Set-Cookie');
        
        if (is_array($headers) && count($headers)) {
            foreach($headers as $header) {
                header($header);
            }
        }
        
        echo $data;
        exit;
    }
}
