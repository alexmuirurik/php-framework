<?php 

namespace App\Models;
use \App\Models\Conn;
class Model{
    private $mysql;
    public function __construct(){
        $dbconn = new Conn;
        $conn = $dbconn->dbconn();
        $this->mysql = new \Simplon\Mysql\Mysql($conn);
    }

    public function all(){
        $class = strtolower(str_replace('App\Models\\', '', get_called_class()));
        $sql = "SELECT * FROM $class";
        return $this->mysql->fetchRow($sql);
    }
}