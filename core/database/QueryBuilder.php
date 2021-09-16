<?php


class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo= $pdo;
    }

    public function selectAll($table, $intoClass)
    {
        $statement = $this->$pdo->prepare("select * from {$table}");

        $statement->execute();
        
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    public function insert($table, $parameter)
    {

      $sql = sprintf(
          'insert into %s (%s) values (%s)',
          $table,
         implode(',', array_keys($parameter)),
         implode(',:', array_keys($parameter))
      
      );


      try {

        $this->pdo->prepare($sql);
        $statement->execute($parameter);
      } catch(Exception $e){
          die('Whoops, something went wrong');
      }
    }
}