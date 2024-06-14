<?php

namespace App\Core\Database;

use PDO, Exception;

class QueryBuilder
{
    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $sql = "select * from {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function selectAllSearch($table, array $param){
        $key=null;
        $value=null;
        foreach($param as $keyB=>$valueB){
              $key=$keyB;
              $value=$valueB;
        }
        $sql ="SELECT * FROM {$table} WHERE $key LIKE ?";
        $titleValue='%'.$value.'%';
        try{
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1,$titleValue);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_CLASS);
        }
        catch (Exception $e) {
            die($e->getMessage());
           }
    }
}