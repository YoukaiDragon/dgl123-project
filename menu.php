<?php include "templates/head.php" ?>
  <title>Games & Grounds Menu</title>
  <link rel="stylesheet" href="styles/menu-style.css" />
</head>
<?php include "templates/header.php" ?>
  <h1>Menu</h1>

  <?php $conn = mysqli_connect('localhost', 'root', '', 'dgl123-project');

  $sql = "SELECT * FROM menu_hotdrinks";
  $results = $conn->query($sql);

  if ($results->num_rows > 0) : ?>
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
          <?php while($row = $results->fetch_assoc()) : ?>
            <tr>
              <?php if ($row['drink'] ==="COFFEE") : ?>
                <td><b><?= $row['drink'] ?></b></td>
              <?php else : ?>
            <td><?= $row['drink'] ?></td>
            <?php endif ?>
            <td><?= $row['priceSmall'] ?></td>
            <td><?= $row['priceMed'] ?></td>
            <td><?= $row['priceLarge'] ?></td>
            </tr>
          <?php endwhile ?>
        </table>
      </div>
  <?php else : ?>
    <p>ERROR: Menu not available at this moment</p>
  <?php endif ?>

  <?php $sql = "SELECT * FROM menu_frappe";
  $results = $conn->query($sql);
  if ($results->num_rows > 0) : ?>
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
          <?php while($row = $results->fetch_assoc()) : ?>
            <tr>
            <?php if ($row['drink'] ==="COFFEE") : ?>
                <td><b><?= $row['drink'] ?></b></td>
              <?php else : ?>
            <td><?= $row['drink'] ?></td>
            <?php endif ?>
            <td><?= $row['priceSmall'] ?></td>
            <td><?= $row['priceMed'] ?></td>
            <td><?= $row['priceLarge'] ?></td>
            </tr>
          <?php endwhile ?>
        </table>
      </div>
      <?php else : ?>
      <p>ERROR: Menu not available at this moment</p>
      <?php endif ?>
      <?php $sql = "SELECT * FROM menu_overice";
      $results = $conn->query($sql);
      if ($results->num_rows > 0) : ?>
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
          <?php while($row = $results->fetch_assoc()) : ?>
            <tr>
            <?php if ($row['drink'] ==="COFFEE") : ?>
                <td><b><?= $row['drink'] ?></b></td>
              <?php else : ?>
            <td><?= $row['drink'] ?></td>
            <?php endif ?>
            <td><?= $row['priceSmall'] ?></td>
            <td><?= $row['priceMed'] ?></td>
            <td><?= $row['priceLarge'] ?></td>
            </tr>
          <?php endwhile ?>
        </table>
      </div>
      <?php else : ?>
      <p>ERROR: Menu not available at this moment</p>
      <?php endif ?>
    </div>
    <div class="note">
      <p>Flavor Shot 0.85 Subst. Soy/Almond 1.00</p>
      <p>Extras: Add Espresso Shot 0.75 Add Ice Cream 1.60</p>
    </div>
  </main>
  <?php include "templates/footer.php" ?>
</body>
</html>