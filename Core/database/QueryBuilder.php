<?php
namespace Core\database;
use PDO;
use PDOException;
class QueryBuilder
{


    protected $pdo;

    public function __construct($pdo)
    {

        $this->pdo = $pdo;
    }
    public function insert($table, $params)
    {
      $sql = sprintf("insert into %s (%s) values (%s)",
        $table,implode(",",array_keys($params)),":".implode(",:",array_keys($params)));
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($params);
        }catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
    public function selectAll($table)
    {
        $sql = sprintf("select * from %s",$table);
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
    public function select($table,$id){
        $statement=$this->pdo->prepare(query: "SELECT * FROM {$table} WHERE id=:id");
        $statement->execute(['id'=>$id]);
        return $statement->fetch(PDO::FETCH_OBJ);
    }
    public function update($table,$set,$where,$params)
    {
        $sql = sprintf("update %s set %s where %s",$table,$set,$where);
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($params);
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
    public function delete($table,$where,$params)
    {
        $sql = sprintf("delete from %s where %s",$table,$where);
        try {
           $statement = $this->pdo->prepare($sql);
           $statement->execute($params);
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }

}