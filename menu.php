<?php include "templates/head.php" ?>
  <title>Games & Grounds Menu</title>
  <link rel="stylesheet" href="styles/menu-style.css" />
</head>
<?php include "templates/header.php" ?>
  <h1>Menu</h1>

  <?php $conn = mysqli_connect('localhost', 'root', '', 'dgl123-project'); ?>

    <div class="menu">
      <div>
        <table>
          <caption>
            Hot Drinks
          </caption>
          <tr>
            <td><b>NON COFFEE</b></td>
            <td>120z</td>
            <td>16oz</td>
            <td>20oz</td>
          </tr>
          <?php $sql = "SELECT * FROM menu_hotdrinks ORDER BY id ASC";
          $results = $conn->query($sql); ?>
          <?php if ($results->num_rows > 0) : ?>
            <?php while ($row = $results->fetch_assoc()) : ?>
              <tr>
              <td><?= $row['drink'] ?></td>
              <td><?= $row['priceSmall'] ?></td>
              <td><?= $row['priceMed'] ?></td>
              <td><?= $row['priceLarge'] ?></td>
              </tr>
          <?php endwhile ?>
          <?php endif ?>
          <?php $sql = "SELECT * FROM menu_hotdrinks_coffee ORDER BY id ASC";
          $results = $conn->query($sql);
          if($results->num_rows > 0) : ?>
            <tr>
              <td><b>COFFEE</b></td>
              <td colspan=3></td>
            </tr>
            <?php while ($row = $results->fetch_assoc()) : ?>
              <tr>
              <td><?= $row['drink'] ?></td>
              <td><?= $row['priceSmall'] ?></td>
              <td><?= $row['priceMed'] ?></td>
              <td><?= $row['priceLarge'] ?></td>
              </tr>
            <?php endwhile ?>
            <?php endif ?>
        </table>
      </div>
      <div>
        <table>
          <caption>
            Frappe's
          </caption>
          <tr>
            <td><b>NON COFFEE</b></td>
            <td>12oz</td>
            <td>16oz</td>
            <td>20oz</td>
          </tr>
          <?php $sql = "SELECT * FROM menu_frappe ORDER BY id ASC";
          $results = $conn->query($sql); ?>
          <?php if ($results->num_rows > 0) : ?>
            <?php while ($row = $results->fetch_assoc()) : ?>
              <tr>
              <td><?= $row['drink'] ?></td>
              <td><?= $row['priceSmall'] ?></td>
              <td><?= $row['priceMed'] ?></td>
              <td><?= $row['priceLarge'] ?></td>
              </tr>
          <?php endwhile ?>
          <?php endif ?>
          <?php $sql = "SELECT * FROM menu_frappe_coffee ORDER BY id ASC";
          $results = $conn->query($sql);
          if($results->num_rows > 0) : ?>
            <tr>
              <td><b>COFFEE</b></td>
              <td>1 Shot</td>
              <td>2 Shots</td>
              <td>3 Shots</td>
            </tr>
            <?php while ($row = $results->fetch_assoc()) : ?>
              <tr>
              <td><?= $row['drink'] ?></td>
              <td><?= $row['priceSmall'] ?></td>
              <td><?= $row['priceMed'] ?></td>
              <td><?= $row['priceLarge'] ?></td>
              </tr>
            <?php endwhile ?>
            <?php endif ?>          
        </table>
      </div>
      <div>
        <table>
          <caption>
            Over Ice
          </caption>
          <tr>
            <td><b>NON COFFEE</b></td>
            <td>12oz</td>
            <td>16oz</td>
            <td>20oz</td>
          </tr>
          <?php $sql = "SELECT * FROM menu_overice ORDER BY id ASC";
          $results = $conn->query($sql); ?>
          <?php if ($results->num_rows > 0) : ?>
            <?php while ($row = $results->fetch_assoc()) : ?>
              <tr>
              <td><?= $row['drink'] ?></td>
              <td><?= $row['priceSmall'] ?></td>
              <td><?= $row['priceMed'] ?></td>
              <td><?= $row['priceLarge'] ?></td>
              </tr>
          <?php endwhile ?>
          <?php endif ?>
          <?php $sql = "SELECT * FROM menu_overice_coffee ORDER BY id ASC";
          $results = $conn->query($sql);
          if($results->num_rows > 0) : ?>
            <tr>
              <td><b>COFFEE</b></td>
              <td colspan=3></td>
            </tr>
            <?php while ($row = $results->fetch_assoc()) : ?>
              <tr>
              <td><?= $row['drink'] ?></td>
              <td><?= $row['priceSmall'] ?></td>
              <td><?= $row['priceMed'] ?></td>
              <td><?= $row['priceLarge'] ?></td>
              </tr>
            <?php endwhile ?>
            <?php endif ?>
        </table>
      </div>
    </div>
    <div class="note">
      <p>Flavor Shot 0.85 Subst. Soy/Almond 1.00</p>
      <p>Extras: Add Espresso Shot 0.75 Add Ice Cream 1.60</p>
    </div>
  </main>
  <?php include "templates/footer.php" ?>
</body>
</html>