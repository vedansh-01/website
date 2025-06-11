<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $products = $_POST['products'] ?? [];
  file_put_contents('products.json', json_encode(array_values($products), JSON_PRETTY_PRINT));
  echo "Products updated successfully.<br><a href='admin.php'>Go back</a>";
} else {
  echo "Invalid request.";
}
