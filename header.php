<header class="header">

   <div class="flex">

      <a href="adminHomeP.php" class="logo">Admin</a>

      <nav class="navbar">
         <a href="admin.php">add products</a>
         
         <a href="logout.php"> Logout</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>