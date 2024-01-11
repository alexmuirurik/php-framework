<?php 

namespace App\Controllers; 
use App\Models\User;
use Smarty;

class HomeController extends Controllers{
    private $smarty;
    public function __construct(){
        $this->smarty   =   new Smarty();
        $this->smarty->setTemplateDir(__DIR__.'/../resources/view');
    }
    public function index(){
        $users = new User();
        $allusers = $users->all();
        $this->smarty->assign('users', $allusers);
        $this->smarty->display(__DIR__.'/../../resources/view/pages/home.twig');
    }

    public function NotFound(){
        header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
        echo '404, route not found!';
    }
}
