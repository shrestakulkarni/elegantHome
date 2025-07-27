
      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>
      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <!--<a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>-->

      