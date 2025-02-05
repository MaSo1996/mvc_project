<?php

class Product
{
  public function getData(): array
  {
    $dsn = "mysql:host=localhost; dbname=product_db; charset=utf8; port=3306";

    $pdo = new PDO($dsn, "product_db_user", "secret", [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $stmt = $pdo->query("select * from product");

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
