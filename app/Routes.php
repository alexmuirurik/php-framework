<?php 

namespace App;
class Routes extends App{
    private $route;

    public function __construct(){
        
    }

    private function getTheUrl(){
        $filename = preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
        if (php_sapi_name() === 'cli-server')  return $this->route = $filename; 
        return $this->route = $_GET['url'];
    }

    private function webUrls() {
        return require __DIR__ . './../config/web.php';
    }

    private function apiUrls(){
        return require __DIR__ . './../config/api.php';
    }

    public function goToUrl(){
        if($this->route == '/api'){
            return $this->apiUrls();
        }

        return $this->webUrls();
    }
}