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

    public function selectAll($table, $start_limit = null, $rows_amount = null)
    {
        $sql = "select * from {$table}";

        if ($start_limit >=0 && $rows_amount > 0) {
            $sql .= " LIMIT {$start_limit}, {$rows_amount}";
        }

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    
    
    public function insert($table, $parameters,){
        $sql = sprintf(
        'INSERT INTO %s (%s) VALUES (%s)', 
        $table, implode(', ', array_keys($parameters)),
         ':' . implode(', :', array_keys($parameters))
        );

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);


        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function delete($table, $id)
    {
        $sql = sprintf(
            'DELETE FROM %s WHERE id = %s', 
            $table, 
            'id = :id'
            );
            try {
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute(compact('id'));
    
    
            } catch (Exception $e) {
                die($e->getMessage());
            }
        
    }

    public function edit($table, $id,$parameters){
        $sql = sprintf(  
            'UPDATE %s SET %s WHERE %s',
            $table,
            implode(', ', array_map(function ($parameters){
                return "{$parameters} = :{$parameters}";
            }, array_keys($parameters))),
            'id = :id'
        );
        $parameters['id'] = $id;
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);


        } catch (Exception $e) {
            die($e->getMessage());
        }
    
        header('Location: /posts');
    }

}

?>