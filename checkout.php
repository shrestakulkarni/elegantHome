<?php

@include 'config.php';

if (isset($_POST['order_btn'])) {

   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $flat = $_POST['flat'];
   $street = $_POST['street'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['country'];
   $pin_code = $_POST['pin_code'];

   $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   $price_total = 0;
   if (mysqli_num_rows($cart_query) > 0) {
      while ($product_item = mysqli_fetch_assoc($cart_query)) {
         $product_name[] = $product_item['name'] . ' (' . $product_item['quantity'] . ') ';
         $product_price = number_format($product_item['price'] * $product_item['quantity']);
         $price_total += $product_price;
      };
   };

   $total_product = implode(', ', $product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, number, email, method, flat, street, city, state, country, pin_code, total_products, total_price) VALUES('$name','$number','$email','$method','$flat','$street','$city','$state','$country','$pin_code','$total_product','$price_total')") or die('query failed');

   if ($cart_query && $detail_query) {
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for shopping!</h3>
         <div class='order-detail'>
            <span>" . $total_product . "</span>
            <span class='total'> total : ". 344,520.00 ."/-  </span>
         </div>
         <div class='customer-details'>
            <p> your name : <span>" . $name . "</span> </p>
            <p> your number : <span>" . $number . "</span> </p>
            <p> your email : <span>" . $email . "</span> </p>
            <p> your address : <span>" . $flat . ", " . $street . ", " . $city . ", " . $state . ", " . $country . " - " . $pin_code . "</span> </p>
            <p> your payment mode : <span>" . $method . "</span> </p>
            <p>(*pay when product arrives*)</p>
         </div>
            <a href='productDropDown.php' class='btn'>continue shopping</a>
         </div>
      </div>
      ";
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="styleAdmin.css">
   <!--MAINPAGE CSS-->
   <link rel="stylesheet" href="styleIndex.css" />
   <!--END OF MAINPAGE CSS-->

</head>

<body>

   <?php include 'headerUser.php'; ?>
   <!-- Header Start -->
   <div class="header">
      <nav>
         <input type="checkbox" id="show-search">
         <input type="checkbox" id="show-menu">
         <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
         <div class="content">
            <div class="logo"><a href="index.php"><img src="logo.png" alt=""></a></div>

            <ul class="links">
               <li><a href="index.php" id="first">Home</a></li>
               <li><a href="#about">About</a></li>
               <li><a href="productDropDown.php">Products</a></li>
               <li><a href="#contact">Contact</a></li>
               <li><a href="#review">Reviews</a></li>
            </ul>
         </div>




         <div class="cart">
            <?php include 'headerUser.php'; ?>
            <label class="nav-item">

               <i class="fa-solid fa-cart-shopping" style="font-size: large;"> <a href="cart.php" class="cart" style="font-weight: bold;">cart <span><?php echo $row_count; ?></span> </a></i>

            </label>
         </div>
         <label class="nav-item">
            <i class="fa-solid fa-user" style="font-size: large;"><a href="logout.php" style="font-weight: bold;"> Logout</a></i>
         </label>


      </nav>
   </div>
   <!-- Header End -->

   <div class="container">

      <section class="checkout-form">

         <h1 class="heading">complete your order</h1>

         <form action="" method="post">

            <div class="display-order">
               <?php
               // Query the cart items
               $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
               $total = 0;
               $grand_total = 0;

               if (mysqli_num_rows($select_cart) > 0) {
                  while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
                     $price = floatval($fetch_cart['price']);  // Ensure price is treated as a float
                     $quantity = intval($fetch_cart['quantity']);  // Ensure quantity is treated as an integer
                     $total_price = $price * $quantity;  // Calculate total price as a numeric value
                     $total += $total_price;  // Add to total
               ?>

                     <span><?= $fetch_cart['name']; ?>(<?= $quantity; ?>)</span>
               <?php
                  }
                  $grand_total = $total;  // Assign total to grand total after the loop
               } else {
                  echo "<div class='display-order'><span>Your cart is empty!</span></div>";
               }
               ?>

               <!-- Display grand total -->
               <div style="font-size:xx-large"><strong>Grand Total: <?= number_format($grand_total, 2); ?>/-</strong></div>

                
            </div>

            <div class="flex">
               <div class="inputBox">
                  <span>your name</span>
                  <input type="text" placeholder="enter your name" name="name" required>
               </div>
               <div class="inputBox">
                  <span>your number</span>
                  <input type="number" placeholder="enter your number" name="number" required>
               </div>
               <div class="inputBox">
                  <span>your email</span>
                  <input type="email" placeholder="enter your email" name="email" required>
               </div>
               <div class="inputBox">
                  <span>payment method</span>
                  <select name="method">
                     <option value="cash on delivery" selected>cash on devlivery</option>
                     <option value="credit cart">credit cart</option>
                     <option value="paypal">paypal</option>
                  </select>
               </div>
               <div class="inputBox">
                  <span>address line 1</span>
                  <input type="text" placeholder="e.g. flat no." name="flat" required>
               </div>
               <div class="inputBox">
                  <span>address line 2</span>
                  <input type="text" placeholder="e.g. street name" name="street" required>
               </div>
               <div class="inputBox">
                  <span>city</span>
                  <input type="text" placeholder="e.g. mumbai" name="city" required>
               </div>
               <div class="inputBox">
                  <span>state</span>
                  <input type="text" placeholder="e.g. maharashtra" name="state" required>
               </div>
               <div class="inputBox">
                  <span>country</span>
                  <input type="text" placeholder="e.g. india" name="country" required>
               </div>
               <div class="inputBox">
                  <span>pin code</span>
                  <input type="text" placeholder="e.g. 123456" name="pin_code" required>
               </div>
            </div>
            <input type="submit" value="order now" name="order_btn" class="btn">
         </form>

      </section>

   </div>

   <!-- custom js file link  -->
   <script src="scriptAdmin.js"></script>

</body>

</html>