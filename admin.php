<?php
$user = $_POST['user'] ?? '';
$pass = $_POST['pass'] ?? '';
if ($user === 'sanjaykhuntetaadmin' && $pass === 'admins') {
  $data = file_get_contents('products.json');
  $products = json_decode($data, true);
  ?>
  <h1>Admin Panel - Update Products</h1>
  <form method="POST" action="update_product.php">
    <?php foreach ($products as $index => $p): ?>
      <h2><?php echo $p['name']; ?></h2>
      <input type="hidden" name="products[<?php echo $index; ?>][name]" value="<?php echo $p['name']; ?>">
      Price: <input type="number" name="products[<?php echo $index; ?>][price]" value="<?php echo $p['price']; ?>"><br>
      Min Qty: <input type="number" name="products[<?php echo $index; ?>][min_qty]" value="<?php echo $p['min_qty']; ?>"><br>
      Max Qty: <input type="number" name="products[<?php echo $index; ?>][max_qty]" value="<?php echo $p['max_qty']; ?>"><br><br>
    <?php endforeach; ?>
    <input type="submit" value="Update Products">
  </form>
  <?php
} else {
  ?>
  <form method="POST">
    <h2>Login</h2>
    Username: <input name="user"><br>
    Password: <input name="pass" type="password"><br>
    <input type="submit" value="Login">
  </form>
  <?php
}
?>
