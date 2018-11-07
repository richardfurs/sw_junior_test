<?php

include_once 'Products/Disc.php';
include_once 'Products/Book.php';
include_once 'Products/Furniture.php';

class QueryBuilder {
    protected $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare(
            "select type, sku, name, price, size, weight, height, width, length from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_CLASSTYPE);
    }

    public function insert($pdo, $data)
    {
        $statement = $pdo->prepare(
            "INSERT INTO mainform (type, sku, name, price, size, weight, height, width, length)
             VALUES (:type, :sku, :name, :price, :size, :weight, :height, :width, :length)");
        $result = $statement->execute($data);

        return $result;
    }
}






//
