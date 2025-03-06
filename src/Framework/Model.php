<?php

namespace Framework;

use PDO;
use App\Database;

abstract class Model
{
  public function __construct(private Database $database) {}

  public function findAll(): array
  {
    $pdo = $this->database->getConnection();

    $stmt = $pdo->query("select * from product");

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function find(string $id): array|bool
  {
    $conn = $this->database->getConnection();

    $sql = "select * from product where id = :id";

    $stmt = $conn->prepare($sql);

    $stmt->bindValue(":id", $id, PDO::PARAM_INT);

    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}
