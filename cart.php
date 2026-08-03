<?php
session_start();


include '../includes/db/connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $product_id = $_POST['product_id'];


    if (!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }
    if(isset($_SESSION['cart'][$product_id])){
        $_SESSION['cart'][$product_id]++;
    }else{
        $_SESSION['cart'][$product_id] = 1;
    }


    if(isset($_POST['remove_id'])){
        $remove_id = (int) $_POST['remove_id'];
        unset($_SESSION['cart'][$remove_id]);
    }


    header('Location: ' .$_SERVER['PHP_SELF']);
    exit();

}
$cart_items = [];
$subtotal = 0;
$image_folder = '/gardennwears/assets/images/';

if(!empty($_SESSION['cart'])){
    $product_id = array_keys($_SESSION['cart']);
    $placeholders = implode(',', array_fill(0, count($product_id),'?'));

    $stmt = $conn->prepare("SELECT * FROM products WHERE id IN ($placeholders)");
    if($stmt) {
        $stmt->bind_param(str_repeat('i', count($product_id)), ...$product_id);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()){
            $row['quantity'] = $_SESSION['cart'][$row['id']];
            $cart_items[] = $row;
        }
        $stmt->close();


    
        foreach($cart_items as $item){
            $subtotal += $item['price'] * $item['quantity'];

        }

    }else{
        die('Failed to prepare statement:' .$conn->error);
    }
}
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="/gardennwears/assets/css/style.css">
    <link rel="icon" type="image/png" href="/gardennwears/assets/images/icons8-clothes-94.png">
</head>
<body class="cart-page-body">

    <header class="cart-page-header">
        <h1>Gardenn Wears</h1>
        <a href="/gardennwears/index.php" class="back-to-store">&larr; Continue Shopping</a>
    </header>

    <main class="cart-page-container">
        <section class="cart-items-section">
            <h2>Shopping Cart</h2>
            <div id="dedicated-cart-container">
                <?php if (empty($cart_items)): ?>
                <p class="empty-message">Your cart is empty.</p>
                <?php else: ?>
                    <?php foreach ($cart_items as $item): ?>
                        <div class="cart-item">
                                <img src="<?php echo $image_folder . $item['image']; ?>"
                                    alt="<?php echo $item['name']; ?>" width="100">
                            <h3><?php echo $item['name']; ?><h3>
                            <p>Ksh.<?php echo $item['price']; ?></p>
                            <form method="POST" action="cart.php">
                                <input type="hidden" name="remove_id" value="<?php echo htmlspecialchars($item['id']); ?>">
                                <button type="submit" name="remove-from-cart" class="remove-page-item">Remove</button>
                            </form>


                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                    </div>

        </section>

        <section class="cart-summary-section">
            <h3>Order Summary</h3>
            <div class="summary-row">
                <span>Subtotal</span>
                <span id="summary-subtotal">Ksh. <?php echo number_format($subtotal); ?></span>
            </div>
            <div class="summary-row">
                <span>Delivery</span>
                <span class="free-delivery">FREE</span>
            </div>
            <hr>
            <div class="summary-row total-row">
                <span>Estimated Total</span>
                <span id="summary-total">Ksh. <?php echo number_format($subtotal); ?></span>
            </div>
            <button id="checkout-btn" class="checkout-btn">Proceed to Checkout</button>
        </section>
    </main>
 <?php
 include '../partials/footer.php';

 ?>