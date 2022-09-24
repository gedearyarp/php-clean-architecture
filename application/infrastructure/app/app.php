<?php

class App {
    protected $controller = 'login';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseURL();
        var_dump($url);
        
        if (isset($url[0]) and file_exists('application/interface/controller/' . $url[0] . '_controller.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        else if ($url == NULL && isset($_SESSION['role'])) {
            $this->controller = $_SESSION['role'];
        }

        require_once 'application/interface/controller/' . $this->controller . '_controller.php';
        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        if (!empty($url)) {
            $this->params = array_values($url);
        }

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL() {
        if (isset($_GET['url'])) {
            var_dump($_GET['url']); //TODO: nanti hapus
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            var_dump($url[0]);
            return $url;
        }
    }
}
?>  