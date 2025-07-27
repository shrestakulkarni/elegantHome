<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> ADMIN</title>
  <link rel="stylesheet" href="styleAdminH.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxs-bank'>Admin</i>
      
    </div>
    <ul class="nav-links">
      <li>
        <a href="#" class="active">
          <i class='bx bx-grid-alt'>Dashboard</i>
         
        </a>
      </li>
      
      <li>
        <a href="admin.php">
          <i class='bx bx-coin-stack'>Product List</i>
          
        </a>
      </li>
      <li>
     
    </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>

      <div class="profile-details">

        <i class="fa-solid fa-user"><a href="logout.php"> Logout</a></i>

      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Order</div>
            <div class="number">2</div>

          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>


        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Return</div>
            <div class="number">1</div>

          </div>
          <i class='bx bxs-cart-download cart four'></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Total orders</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Date</li>
              <li>02 Jan 2023</li>
              <li>02 Jan 2023</li>

            </ul>
            <ul class="details">
              <li class="topic">Customer</li>

              <li> Roshini</li>
              <li> Rani</li>

            </ul>
            <ul class="details">
              <li class="topic">Sales</li>
              <li>Delivered</li>
              <li>Pending</li>

            </ul>
            <ul class="details">
              <li class="topic">Total</li>
              <li>$204.98</li>
              <li>$24.55</li>

            </ul>
          </div>

        </div>
        <div class="top-sales box">
          <div class="title">Order details</div>
          <ul class="top-sales-details">
            <li>
              <a>
                <img src="" alt="">
                <span class="product">Chair</span>
              </a>
              <span class="price">$1107</span>
            </li>
            <li>
              <a>
                <img src=" " alt="">
                <span class="product">Bed </span>
              </a>
              <span class="price">$1567</span>
            </li>
            <li>
              <a>
                <img src=" " alt="">
                <span class="product">Sofa</span>
              </a>
              <span class="price">$1234</span>
            </li>
            <li>
              <a>
                <img src=" " alt="">
                <span class="product">Dinning table</span>
              </a>
              <span class="price">$1234</span>
            </li>






          </ul>
        </div>
      </div>
    </div>
  </section>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  </script>

</body>

</html>