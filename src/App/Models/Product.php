<?php

namespace App\Models;

use Framework\Model;

class Product extends Model
{
  protected $table = 'products';

  protected function validate(array $data): void
  {
    if (empty($data['name'])) {
      $this->addError('name', 'Name is required');
    }
  }
}
