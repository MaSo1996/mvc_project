<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
</head>

<body>

  <h1>Products</h1>

  <a href="/products/new">New Product</a>

  <?php

  foreach ($products as $product) :

  ?>

    <h2><a href="/products/<?= $product['id'] ?>/show">
        <?= htmlspecialchars($product['name']) ?>
      </a></h2>

  <?php endforeach; ?>

</body>

</html>