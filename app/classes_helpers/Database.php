<?php
namespace Blog;
use PDO;
use PDOException;
use Stringable;

class Database{

    private $db_host;  
    private $db_user ;
    private $db_pass ;
    private $db_name;
    private $pdo;
    private $error;

    public function __construct($db_name,$db_user,$db_host,$db_pass)
    { 
          
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
     
        
    }

    private function getPDO()
    {
        if($this->pdo === null)
        {
            $dsn = 'mysql:dbname=' . $this->db_name . ';host=' . $this->db_host.';charset=utf8';
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
            );

            try {

                return $this->pdo = new PDO($dsn, $this->db_user, $this->db_pass, $options);

            } catch(PDOException $e) {

                return $this->error = $e->getMessage();
            }

        }
          
    }

    public function query($statement,$class,$one=false)
    {  
        if($this->pdo===null)
        {
            $res = $this->getPDO()->query($statement);
            $res->setFetchMode(PDO::FETCH_CLASS,$class);

            if($one)
            {
              $data = $res->fetch();
            }
            else
            {
                $data = $res->fetchAll();
              
            }
            return $data;
        }
       
    }

    public function prepare($statement,$vars,$class,$one = false)
    {
       $req = $this->getPDO()->prepare($statement);
       $req->execute($vars);
       $req->setFetchMode(PDO::FETCH_CLASS,$class);

       if($one)
       {
           $data = $req->fetch();
       }
       else
       {
            $data = $req->fetchAll();
       }
      
       return $data;
       
    }
}