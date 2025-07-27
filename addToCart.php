<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>addToCart</title>

  <!-- Style Css Link -->
  <link rel="stylesheet" href="addToCart.css" />
  <!-- Style Css Link -->

  <!--MAINPAGE CSS-->
  <link rel="stylesheet" href="styleIndex.css" />
  <!--END OF MAINPAGE CSS-->

  <!-- Font Awesome Cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- Font Awesome Cdn -->
</head>

<body>
  <!--HEADER-->
  <div class="header">
    <nav>
      <input type="checkbox" id="show-search" />
      <input type="checkbox" id="show-menu" />
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
                <div class="logo"><a href="index.php"><img src="logo.png" alt=""></a></div>

                <ul class="links">
                    <li><a href="#" id="first">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <div class="dropdown">
                        <button class="dropbtn">Products</button>
                        <div class="dropdown-content">
                            <a href="C:/Users/chava/Downloads/Furniture Website (1)/Furniture Website/main/dropdownProducts/chair/chair1.html">CHAIR</a>
                            <a href="C:/Users/chava/Downloads/Furniture Website (1)/Furniture Website/main/dropdownProducts/bed/bed1.html">BED</a>
                            <a href="C:/Users/chava/Downloads/Furniture Website (1)/Furniture Website/main/dropdownProducts/sofa/sofa1.html">SOFA</a>
                            <a href="C:/Users/chava/Downloads/Furniture Website (1)/Furniture Website/main/dropdownProducts/dine/dine1.html">DINNING TABLE</a>

                            <a href="C:/Users/chava/Downloads/Furniture Website (1)/Furniture Website/main/dropdownProducts/dcors/decors1.html">DECORS</a>
                            <a href="C:/Users/chava/Downloads/Furniture Website (1)/Furniture Website/main/dropdownProducts/end/end1.html">END TABLES</a>
                            <a href="C:/Users/chava/Downloads/Furniture Website (1)/Furniture Website/main/dropdownProducts/book/book1.html">BOOKENDS</a>

                        </div>
                    </div>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#review">Reviews</a></li>
                </ul>
            </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Search" required />
        <button type="submit" class="go-icon">
          <i class="fas fa-long-arrow-alt-right"></i>
        </button>
      </form>
      <label class="nav-item">
        <a href="addToCart.php" class="nav-link add-to-cart-button" id="cartValue">
          <i class="fa-solid fa-cart-shopping"> 0</i>
        </a>
      </label>
      <label class="nav-item">
                <i class="fa-solid fa-user"><a href="logout.php"> Logout</a></i>
            </label>
    </nav>
  </div>
  <!-- END OF HEADER-->

  <!--same div,so they give 2container columns-->
  <div class="gridContainer">
    <!--products added to cart start-->
    <div class="cartTab">
      <h1>Shopping Cart</h1>
      <div class="listCart">
        <div class="item">
          <div class="image">
            <img src="./images\1.png" alt="" />
          </div>
          <div class="name">name</div>
          <div class="totalPrice">$200</div>
          <div class="quantity">
            <button><span class="minus">-</span></button>
            <span>1</span>
            <button><span class="plus">+</span></button>
          </div>
          <div class="removebtn">
            <button class="remove-btn" onclick="removeItem()">Remove</button>
          </div>
        </div>

        <div class="item">
          <div class="image">
            <img src="./images/2.png" alt="" />
          </div>
          <div class="name">name</div>
          <div class="totalPrice">$200</div>
          <div class="quantity">
            <button><span class="minus">-</span></button>
            <span>1</span>
            <button><span class="plus">+</span></button>
          </div>
          <div class="removebtn">
            <button class="remove-btn" onclick="removeItem()">Remove</button>
          </div>
        </div>

        <div class="item">
          <div class="image">
            <img src="./images/3.png" alt="" />
          </div>
          <div class="name">name</div>
          <div class="totalPrice">$200</div>
          <div class="quantity">
            <button><span class="minus">-</span></button>
            <span>1</span>
            <button><span class="plus">+</span></button>
          </div>
          <div class="removebtn">
            <button class="remove-btn" onclick="removeItem()">Remove</button>
          </div>
        </div>
      </div>
    </div>

    <!--products added to cart end-->

    <!--start of shopping cart on rightside-->
    <section class="addToCartElement">
      <div class="container">
        <section>
          <div class="productCartContainer"></div>
        </section>

        <section class="productCartTotalElem">
          <div class="productCartTotalElement">
            <p>Selected Offer Summary</p>
            <div class="productOrderTotal">
              <div>
                <p>Sub Total:</p>
                <p class="productSubTotal">0</p>
              </div>
              <div>
                <p>Tax:</p>
                <p class="productTax">$50</p>
              </div>
              <hr />
              <div>
                <p>Final Total:</p>
                <p class="productFinalTotal">0</p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
    <!--end of shopping cart on rightside-->
  </div>
  <!-- Footer Start -->
  <footer id="footer">
    <div class="footer-content">
      <div class="logo">
        <img src="./images/logo.jpg" alt="" />
      </div>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et labore
        suscipit nisi non, laudantium delectus? <br />Lorem ipsum dolor sit
        amet consectetur adipisicing elit. Deserunt, molestias!
      </p>
      <div class="socail-links">
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-youtube"></i>
        <i class="fa-brands fa-pinterest-p"></i>
      </div>
    </div>
    <hr />
    <div class="footer-bottom-content">
      <p>Designed By <a href="#">SA Coding</a></p>
      <div class="copyright">
        <p>&copy;Copyright <strong>SA Coding</strong>.All Rights Reserved</p>
      </div>
    </div>
  </footer>
  <!-- Footer End -->
  <script src="main.js"></script>
</body>

</html>