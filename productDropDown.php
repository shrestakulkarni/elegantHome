<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'") or die('query failed');

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chair </title>

    <!-- Style Css Link -->
    <link rel="stylesheet" href="styleAdmin.css">
    <!-- Style Css Link -->
    <link rel="stylesheet" href="styleIndex.css">

    

    <!-- Font Aweso me Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Font Awesome Cdn -->

</head>

<body>

    <!-- Header Start -->
    <div class="header">
        <nav>
            <input type="checkbox" id="show-search">
            <input type="checkbox" id="show-menu">
            <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
            <div class="content">
                <div class="logo"><a href="index.html"><img src="logo.png" alt=""></a></div>

                <ul class="links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <div class="dropdown">
                        <button class="dropbtn">Products</button>
                        <div class="dropdown-content">
                            <a href="#chair">CHAIR</a>
                            <a href="#beds">BED</a>
                            <a href="#sofa">SOFA</a>
                            <a href="#dine">DINNING TABLE</a>
                            <a href="#decors">DECORS</a>
                            <a href="#endt">END TABLES</a>
                            <a href="#book">BOOKENDS</a>

                        </div>
                    </div>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Reviews</a></li>
                </ul>
            </div>

            <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
            <form action="#" class="search-box">
                <input type="text" placeholder="Search" required>
                <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
            </form>
            <?php include 'headerUser.php'; ?>
            <label class="nav-item">

            <i class="fa-solid fa-cart-shopping" style="font-size: large;"> <a href="cart.php" class="cart" style="font-weight: bold;">cart <span><?php echo $row_count; ?></span> </a></i>

         </label>

            <label class="nav-item">
                <i class="fa-solid fa-user" style="font-size: large;"><a href="logout.php" style="font-weight: bold;"> Logout</a></i>
            </label>
        </nav>
    </div>









    <?php include 'headerUser.php'; ?>

    <div class="container">

        <section class="products">

            <h1 class="heading"><a href="#">Chairs</a></h1>

            <div class="box-container" id="chair">

                <?php
                // Select products where category is 'chair'
                $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'chair'");
                if (mysqli_num_rows($select_products) > 0) {
                    while ($fetch_product = mysqli_fetch_assoc($select_products)) {
                ?>

                        <form action="" method="post">
                            <div class="box">
                                <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                                <h3>
                                    <?php echo $fetch_product['name']; ?>
                                </h3>
                                <div class="price"><i class="fa-solid fa-indian-rupee-sign"> </i>
                                    <?php echo $fetch_product['price']; ?>/-
                                </div>
                                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                                <input type="hidden" name="product_category" value="<?php echo $fetch_product['category']; ?>">
                                <!-- This line is correct -->

                                <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                            </div>
                        </form>

                <?php
                    }
                } else {
                    echo "<p>No products found in the chair category.</p>";
                }
                ?>

            </div>

        </section>
    </div>

            <!--Start BEDS-->
            

    <div class="container" >

        <section class="products">

            <h1 class="heading"><a href="#">BEDS</a></h1>

            <div class="box-container" id="beds">

                <?php
                // Select products where category is 'beds'
                $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'bed'");
                if (mysqli_num_rows($select_products) > 0) {
                    while ($fetch_product = mysqli_fetch_assoc($select_products)) {
                ?>

                        <form action="" method="post">
                            <div class="box">
                                <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                                <h3>
                                    <?php echo $fetch_product['name']; ?>
                                </h3>
                                <div class="price"><i class="fa-solid fa-indian-rupee-sign"> </i>
                                    <?php echo $fetch_product['price']; ?>/-
                                </div>
                                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                                <input type="hidden" name="product_category" value="<?php echo $fetch_product['category']; ?>">
                                <!-- This line is correct -->

                                <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                            </div>
                        </form>

                <?php
                    }
                } else {
                    echo "<p>No products found in the chair category.</p>";
                }
                ?>
            </div>
        </section>
    </div>
    </section>


    <!--ends BEDS-->
    
    <!--start of sofa-->
    
    <div class="container" >

<section class="products">

    <h1 class="heading"><a href="#">SOFA</a></h1>

    <div class="box-container" id="sofa">

        <?php
        // Select products where category is 'sofa'
        $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'sofa'");
        if (mysqli_num_rows($select_products) > 0) {
            while ($fetch_product = mysqli_fetch_assoc($select_products)) {
        ?>

                <form action="" method="post">
                    <div class="box">
                        <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                        <h3>
                            <?php echo $fetch_product['name']; ?>
                        </h3>
                        <div class="price"><i class="fa-solid fa-indian-rupee-sign"> </i>
                            <?php echo $fetch_product['price']; ?>/-
                        </div>
                        <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                        <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                        <input type="hidden" name="product_category" value="<?php echo $fetch_product['category']; ?>">
                        <!-- This line is correct -->

                        <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                    </div>
                </form>

        <?php
            }
        } else {
            echo "<p>No products found in the chair category.</p>";
        }
        ?>
    </div>
</section>
</div>
</section>

<!--ends sofa-->
<!--start endt-->
    <div class="container" >

        <section class="products">

            <h1 class="heading"><a href="#">endt</a></h1>

            <div class="box-container" id="endt">

                <?php
                // Select products where category is 'beds'
                $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'endt'");
                if (mysqli_num_rows($select_products) > 0) {
                    while ($fetch_product = mysqli_fetch_assoc($select_products)) {
                ?>

                        <form action="" method="post">
                            <div class="box">
                                <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                                <h3>
                                    <?php echo $fetch_product['name']; ?>
                                </h3>
                                <div class="price"><i class="fa-solid fa-indian-rupee-sign"> </i>
                                    <?php echo $fetch_product['price']; ?>/-
                                </div>
                                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                                <input type="hidden" name="product_category" value="<?php echo $fetch_product['category']; ?>">
                                <!-- This line is correct -->

                                <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                            </div>
                        </form>

                <?php
                    }
                } else {
                    echo "<p>No products found in the chair category.</p>";
                }
                ?>
            </div>
        </section>
    </div>
    </section>


    <!--ends endt-->
 

<div class="container">

    <section class="products">

        <h1 class="heading"><a href="#">decors</a></h1>

        <div class="box-container" id="decors">

            <?php
            // Select products where category is 'decors'
            $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'decors'");
            if (mysqli_num_rows($select_products) > 0) {
                while ($fetch_product = mysqli_fetch_assoc($select_products)) {
            ?>

                    <form action="" method="post">
                        <div class="box">
                            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                            <h3>
                                <?php echo $fetch_product['name']; ?>
                            </h3>
                            <div class="price"><i class="fa-solid fa-indian-rupee-sign"> </i>
                                <?php echo $fetch_product['price']; ?>/-
                            </div>
                            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                            <input type="hidden" name="product_category" value="<?php echo $fetch_product['category']; ?>">
                            <!-- This line is correct -->

                            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                        </div>
                    </form>

            <?php
                }
            } else {
                echo "<p>No products found in the chair category.</p>";
            }
            ?>

        </div>

    </section>

</div>






    <footer id="footer">
        <div class="footer-content">
            <div class="logo">
                <img src="C:/Users/chava/Downloads/Furniture Website (1)/Furniture Website/main/dropdownProducts/chair/logo.jpg" alt="">
            </div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et labore suscipit nisi non, laudantium
                delectus?
                <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, molestias!
            </p>
            <div class="socail-links">
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-pinterest-p"></i>
            </div>
        </div>
        <hr>
        <div class="footer-bottom-content">
            <p>Designed By <a href="#">SRR</a></p>
            <div class="copyright">
                <p>&copy;Copyright <strong>SRR</strong>.All Rights Reserved</p>
            </div>
        </div>
    </footer>
</body>