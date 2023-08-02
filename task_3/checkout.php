<?php

include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:index.php'); 
}

if(isset($_POST['order-btn'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $number =  $_POST['number'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $method = mysqli_real_escape_string($conn, $_POST['method']);
    $address = mysqli_real_escape_string($conn,  $_POST['address'] .','. $_POST['city'].','. $_POST['state'].','. 
    $_POST['country'].','. $_POST['pin_code'] );
    $placed_on = date('d-M-Y');

    $cart_total = 0;
    $cart_products[] = '' ;

    $cart_query = mysqli_query($conn,"SELECT * FROM `cart` WHERE user_id='$user_id'") or die();
    if(mysqli_num_rows($cart_query) > 0){
        while($cart_item = mysqli_fetch_assoc($cart_query)){
            $cart_products[] = $cart_item['name'].'('.$cart_item['quantity'].')';
            $sub_total = $cart_item['price'] * $cart_item['quantity'];
            $cart_total += $sub_total;
        }
    }
    $total_products = implode(', ',$cart_products);
    $order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE name='$name' AND number='$number'
    AND email='$email' AND method='$method' AND address='$address' AND total_products='$total_products'
    AND total_price='$cart_total'") or die('query failed');

    if($cart_total == 0){
        $message[] = 'your cart is empty';
    }else{
        if(mysqli_num_rows($order_query) > 0){
            $message[] = 'order placed already';
        }else{
            mysqli_query($conn, "INSERT INTO `orders`(user_id,name,number,email,method,address, total_products,
            total_price,placed_on)VALUES('$user_id','$name','$number','$email','$method','$address','$total_products','$cart_total','$placed_on')") or die('query failed');
            $message[] = '"YAY! "Order Placed!';
            mysqli_query($conn, "DELETE FROM `cart` WHERE user_id='$user_id'") or die('query failed');
        }

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php include 'header.php'; ?>

    <div class="heading">
        <h3>Checkout</h3>
        <p><a href="home.php">Home</a> / Checkout</p>
    </div> 

    <section class="products-ordered">

        <?php
            $grand_total =0;
            $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id='$user_id'" ) or die('query failed');
            if(mysqli_num_rows($select_cart) > 0){
                while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                    $total_price = ($fetch_cart['price'] * $fetch_cart['quantity']);
                    $grand_total += $total_price;
        ?>
        <p> <?php echo $fetch_cart['name']; ?> <span>(<?php echo '$'.$fetch_cart['price'].' x '. $fetch_cart['quantity']; ?>)</span></p>
        <?php
            }
        }else{
            echo '<p class="empty">Cart is empty</p>';
        }
        ?>
        <div class="grand-total">
            Grand total : <span>$<?php echo $grand_total; ?>/-</span>
        </div>
    </section>

    <section class="checkout">

        <form action="" method="post">
            <h3>Place Order</h3>
            <div class="flex">
                <div class="input-box">
                    <span>Name :</span>
                    <input type="text" name="name" required placeholder="enter your name" id="">
                </div>
                <div class="input-box">
                    <span>Number :</span>
                    <input type="number" name="number" required placeholder="enter your number" id="">
                </div>
                <div class="input-box">
                    <span>Email :</span>
                    <input type="email" name="email" required placeholder="enter your email" id="">
                </div>
                <div class="input-box">
                    <span>Payment method:</span>
                    <select name="method" id="">
                        <option value="cash on dilevery">Cash on dilevery</option>
                        <option value="credit card">Credit card</option>
                        <option value="debit card">Debit card</option>
                        <option value="upi">Online payment</option>
                    </select>
                </div>
                <div class="input-box">
                    <span>Addres :</span>
                    <input type="text" name="address" required placeholder="enter your address" id="">
                </div>
                <div class="input-box">
                    <span>City :</span>
                    <input type="text" name="city" required placeholder="e.g. lucknow" id="">
                </div>
                <div class="input-box">
                    <span>State :</span>
                    <input type="text" name="state" required placeholder="e.g. Uttar pradesh" id="">
                </div>
                <div class="input-box">
                    <span>Country :</span>
                    <input type="text" name="country" required placeholder="e.g. India" id="">
                </div>
                <div class="input-box">
                    <span>Pin code :</span>
                    <input type="number" min="0" name="pin_code" required placeholder="e.g. 228118" id="">
                </div>
            </div>
            <input type="submit" value="order now" class="btn" name="order-btn">
        </form>
    </section>



    <?php include 'footer.php'; ?>
    <script src="./js/script.js"></script>
</body>
</html>