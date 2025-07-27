<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: newLogin.php");
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Webiste</title>

    <!-- Style Css Link -->
    <link rel="stylesheet" href="styleIndex.css">
    <!-- Style Css Link -->

    <!-- Font Awesome Cdn -->
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
                <div class="logo"><a href="index.php"><img src="logo.png" alt=""></a></div>

                <ul class="links">
                    <li><a href="#" id="first">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="productDropDown.php">Products</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#review">Reviews</a></li>
                </ul>
            </div>

            <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
            <form action="#" class="search-box">
                <input type="text" placeholder="Search" required>
                <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
            </form>

            <label class="nav-item">
                <a href="cart.php" class="nav-link add-to-cart-button" id="cartValue" style="font-family:'Times New Roman', Times, serif;">
                    <i class="fa-solid fa-cart-shopping">cart</i>
                </a>
            </label>
            <label class="nav-item">
                <i class="fa-solid fa-user"><a href="logout.php"> Logout</a></i>
            </label>


        </nav>
    </div>
    <!-- Header End -->





    <!-- Home Section Start -->
    <div class="home">
        <div class="main-text">
            <h1>Discover The Best <br>Furniture For You</h1>
            <p>A curated shopping experience awaits, with each collection embracing a unique aesthetic. Whether you're in pursuit of vibrant energy, classic sophistication, or effortless elegance, these collections cater to diverse tastes, guaranteeing a seamless shopping journey tailored to individual styles.</p>
           
        </div>
    </div>
    <!-- Home Section End -->





    <!-- Top Section Card Start -->
    <section class="offers">
        <div class="offer-content">
            <div class="row">
                <i class="fa-solid fa-truck-fast"></i>
                <h3>Free Delivery</h3>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="row">
                <i class="fa-solid fa-headset"></i>
                <a href="#contact">
                    <h3>Support 24/7</h3>
                </a>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="row">
                <i class="fa-solid fa-rotate-left"></i>
                <h3>30 Day Return</h3>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="row">
                <i class="fa-solid fa-cart-shopping"></i>
                <h3>Secure Shopping</h3>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </section>
    <!-- Top Section Card End -->





    <!-- About Section Start -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="./images/about.png" alt="">
        </div>
        <div class="about-text">
            <h3>Furniture service About us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque nemo maxime, eligendi nesciunt quis
                quaerat cupiditate rerum enim obcaecati eum totam facilis, sunt tempore libero officia. Ad, excepturi.
                Qui, voluptatem officia aspernatur iure nam, architecto quos molestiae assumenda nesciunt porro
                voluptatum dolorum consequatur odit. Laudantium saepe sunt perspiciatis dolores ex.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque nemo maxime, eligendi nesciunt quis
                quaerat cupiditate rerum enim obcaecati eum totam facilis, sunt tempore libero officia. Ad, excepturi.
                Qui, voluptatem officia aspernatur iure nam, architecto quos molestiae assumenda nesciunt porro
                voluptatum dolorum consequatur odit. Laudantium saepe sunt perspiciatis dolores ex.</p>


        </div>

    </section>
    <!-- About Section End -->





    <!-- Product Section Start -->
    <section class="product" id="product">
        <div class="main-txt">
            <h3>Products</h3>
        </div>
        <div class="card-content">
            <div class="row">
                <img src="./images/chair.jpg" alt="">
                <div class="card-body">
                    <h3>Chair</h3>
                    <div class="star">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <h4><i class="fa-solid fa-indian-rupee-sign"> 999</i></h4>
                    <button><i class="fa-solid fa-cart-shopping"> Add To Cart </i></button>
                </div>
            </div>
            <div class="row">
                <img src="./images/b1.png" alt="">
                <div class="card-body">
                    <h3>Bed</h3>
                    <div class="star">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <h4><i class="fa-solid fa-indian-rupee-sign"> 999</i></h4>
                    <button><i class="fa-solid fa-cart-shopping"> Add To Cart </i></button>
                </div>
            </div>
            <div class="row">
                <img src="./images/dine.png" alt="">
                <div class="card-body">
                    <h3>Dining Table</h3>
                    <div class="star">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <h4><i class="fa-solid fa-indian-rupee-sign"> 999</i></h4>
                    <button><i class="fa-solid fa-cart-shopping"> Add To Cart </i></button>
                </div>
            </div>
            <div class="row">
                <img src="./images/sofa.png" alt="">
                <div class="card-body">
                    <h3>Sofa</h3>
                    <div class="star">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <h4><i class="fa-solid fa-indian-rupee-sign"> 999</i></h4>
                    <button><i class="fa-solid fa-cart-shopping"> Add To Cart </i></button>
                </div>
            </div>
        </div>

        <!-- <div class="card-content">
            <div class="row">
                <img src="./images/p1.png" alt="">
                <div class="card-body">
                    <h3>Chair</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <h5>Price $999</h5>
                    <button>Order Now</button>
                </div>
            </div>
            <div class="row">
                <img src="./images/p6.png" alt="">
                <div class="card-body">
                    <h3>Chair</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <h5>Price $999</h5>
                    <button>Order Now</button>
                </div>
            </div>
            <div class="row">
                <img src="./images/p7.png" alt="">
                <div class="card-body">
                    <h3>Chair</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <h5>Price $999</h5>
                    <button>Order Now</button>
                </div>
            </div>
            <div class="row">
                <img src="./images/p8.png" alt="">
                <div class="card-body">
                    <h3>Chair</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <h5>Price $999</h5>
                    <button>Order Now</button>
                </div>
            </div>
        </div>-->

    </section>
    <!-- Product Section End -->





    <!-- Banner Start -->
    <div class="banner">
        <div class="banner-content">
            <h5>Get Discount Up To 50%</h5>
            <h3>Best Deal For Week</h3>
            <p>Get up to 50% off this weak and get offer <br>Don't miss</p>
            <button><a href="#product">Order</a></button>
        </div>
    </div>
    <!-- Banner End -->






    <!-- Sale Products Start 
    <section class="product" id="products" style="margin-top: 50px;">
        <div class="main-txt">
            <h3>50% off products</h3>
        </div>
        <div class="card-content">
            <div class="row">
                <img src="./images/p9.png" alt="">
                <div class="card-body">
                    <h3>Chair</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <h5>Price $999</h5>
                    <button>Order Now</button>
                </div>
            </div>
            <div class="row">
                <img src="./images/p10.png" alt="">
                <div class="card-body">
                    <h3>Chair</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <h5>Price $999</h5>
                    <button>Order Now</button>
                </div>
            </div>
            <div class="row">
                <img src="./images/p11.png" alt="">
                <div class="card-body">
                    <h3>Chair</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <h5>Price $999</h5>
                    <button>Order Now</button>
                </div>
            </div>
            <div class="row">
                <img src="./images/p12.png" alt="">
                <div class="card-body">
                    <h3>Chair</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <h5>Price $999</h5>
                    <button>Order Now</button>
                </div>
            </div>
        </div>

    </section>-->
    <!-- Sale Products End -->





    <!-- Our Gallary Start -->
    <div class="gallary">
        <h3 style="margin-top: 55px;">Our Gallary</h3>
        <div class="gallary-img">
            <div class="img1">
                <img src="./images/g1.png" alt="">
            </div>
            <div class="img1">
                <img src="./images/g2.png" alt="">
                <img src="./images/g3.png" alt="">
            </div>
        </div>
    </div>
    <!-- Our Gallary End -->





    <!-- Contact Section Start -->
    <div class="contact" id="contact">
        <div class="content-text" id="contact">
            <center>
                <h2>Get In <span>Touch</span></h2>
            </center>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, voluptates.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, harum. Sint recusandae in suscipit
                blanditiis,
                neque eos quam praesentium impedit?</p>
            <div class="list">
                <li><a href="#"><i class="fa-solid fa-phone"> +9200000000000000</i></a></li>
                <li><a href="#"><i class="fa-solid fa-envelope"> example@gmail.com</i></a></li>
                <li><a href="#"><i class="fa-solid fa-location-dot"> Hyderabad</i></a></li>
            </div>
        </div>



    </div>
    <!-- Contact Section End -->





    <!-- Review Section Start -->
    <section class="review" id="review">
        <div class="main-txt">
            <h3>Customers <span>Review</span></h3>
        </div>

        <div class="review-content">
            <div class="box">
                <div class="img">
                    <img src="./images/pic-1.png" alt="">
                </div>
                <h3>Elon Musk</h3>
                <div class="star">
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At, adipisci.</p>

            </div>
            <div class="box">
                <div class="img">
                    <img src="./images/pic-2.png" alt="">
                </div>
                <h3>Elon Musk</h3>
                <div class="star">
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At, adipisci.</p>

            </div>
            <div class="box">
                <div class="img">
                    <img src="./images/pic-3.png" alt="">
                </div>
                <h3>Elon Musk</h3>
                <div class="star">
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At, adipisci.</p>

            </div>

        </div>

    </section>
    <!-- Review Section End -->





    <!-- Footer Start -->
    <footer id="footer">
        <div class="footer-content">
            <div class="logo">
                <img src="./images/logo.jpg" alt="">
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
            <p>Designed By <a href="#">SA Coding</a></p>
            <div class="copyright">
                <p>&copy;Copyright <strong>SA Coding</strong>.All Rights Reserved</p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    <a href="#" class="arrow"><i><img src="./images/up-arrow.png" alt="" width="50px"></i></a>

</body>

</html>