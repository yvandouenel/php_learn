<?php
namespace Formation\Cours;

use PDOException;
use PDO;

class Db extends PDO {
    private static $instance=null;
    private static $dsn = "mysql:dbname=cours;host=localhost";
    private static $user = "diginamic";
    private static $pwd = "diginamic";

    private function __construct()
    {
        try {
            return parent::__construct(self::$dsn,self::$user,self::$pwd);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Db();
        }
        return self::$instance;
    }

    public function getAll()
    {
        $query = "select * from clients";
        $results = $this->query($query);
        return $results->fetchAll(PDO::FETCH_CLASS,'Formation\Cours\Entity\Clients');
    }

    public function getById($id)
    {
        $query = "select * from clients where id=$id";
        $results = $this->query($query);
        return $results->fetchAll(PDO::FETCH_CLASS,'Formation\Cours\Entity\Clients');
    }
}