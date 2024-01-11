<?php 

namespace App\Controllers; 
use Smarty;
use \App\Models\User;

class UserController extends Controllers{
    private $smarty;
    public function __construct(){
        $this->smarty   =   new Smarty();
        $this->smarty->setTemplateDir(__DIR__.'/../resources/view');
    }
    public function index(){
        $user = new User();
        print_r($user->all());
    }

    public function show(){

    }

    public function create(){

    }

    public function store(){

    }

    public function update(){

    }

    public function delete(){
        
    }
}