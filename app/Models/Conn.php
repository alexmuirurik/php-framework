<?php
namespace App\Models;

class Conn extends Model{
 
    protected $host;
    protected $username;
    protected $password;
    protected $dbname;
    private static $pdo;
    
    protected static $conn;
    
    public function __construct(){
    }

    public function __destruct() {
    }

    private function dbnames(){
        $env = parse_ini_file(__DIR__.'/../../.env');
        $this->host     =   $env['Database_Host'];
        $this->username =   $env['Database_Username'];
        $this->password =   $env['Database_Password'];
        $this->dbname   =   $env['Database_Database'];
        return 'complete';
    }

    private function dbconnect(){
        if(!isset(self::$pdo)){
            self::$pdo = new Conn;
        }
        $names         =    $this->dbnames();
        try{
            return self::$pdo = new \PDO("mysql:host=".$this->host. ";dbname=". $this->dbname, $this->username, $this->password);
        }catch(\PDOException $e){
            die("unable to connect: ". $e->getMessage());
        }
    }
    public function dbconn(){
        return $this->dbconnect();
    }
}