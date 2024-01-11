<?php 

namespace App;
class App {
    private $routes;

    public function __construct(){
        $this->routes = new \App\Routes;
    }

    private function getTheUrl(){
        return $this->routes->goToUrl();
    }

    public function launchApp(){
        return $this->getTheUrl();
    }
}