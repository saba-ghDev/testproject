<?php
<?php
$confirmation = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customer = htmlspecialchars($_POST['customer'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $product = htmlspecialchars($_POST['product'] ?? '');
    $quantity = htmlspecialchars($_POST['quantity'] ?? '');
    $confirmation = "<h2>Order Confirmation</h2>
        <p>Thank you, <strong>$customer</strong>!</p>
        <p>Email: $email</p>
        <p>Product: $product</p>
        <p>Quantity: $quantity</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Form</title>
</head>
<body>
    <h1>Place Your Order</h1>
    <?php if ($confirmation): ?>
        <?php echo $confirmation; ?>
    <?php else: ?>
    <form method="post">
        <label>Customer Name: <input type="text" name="customer" required></label><br><br>
        <label>Email Address: <input type="email" name="email" required></label><br><br>
        <label>Product Name: <input type="text" name="product" required></label><br><br>
        <label>Quantity: <input type="number" name="quantity" min="1" required></label><br><br>
        <button type="submit">Submit Order</button>
    </form>
    <?php endif; ?>
</body>
</html>