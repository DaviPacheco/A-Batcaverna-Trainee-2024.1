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

    public function selectAll($table, $inicio = null, $contagem_linhas = null)
    {
        $sql = "select * from {$table}";

        if ($inicio >=0 && $contagem_linhas > 0) {
            $sql .= " LIMIT {$inicio}, {$contagem_linhas}";
        }

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function countAll($table, $inicio = null, $contagem_linhas = null)
    {
        $sql = "select COUNT(*) from {$table}";

        if ($inicio >=0 && $contagem_linhas > 0) {
            $sql .= " LIMIT {$inicio}, {$contagem_linhas}";
        }

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return intval($stmt->fetch(PDO::FETCH_NUM)[0]);

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
            'DELETE FROM %s WHERE %s', 
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