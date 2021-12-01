<?php include "templates/head.php" ?>
  <title>Games & Grounds Menu</title>
  <link rel="stylesheet" href="styles/menu-style.css" />
</head>
<?php include "templates/header.php" ?>
  <h1>Menu</h1>

  <?php $conn = mysqli_connect('localhost', 'root', '', 'dgl123-project');

  $sql = "SELECT * FROM menu_hotdrinks";
  $results = $conn->query($sql); ?>

  <?php if ($results->num_rows > 0) : ?>
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
            <td><?= $row['drink'] ?></td>
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
          <tr>
            <td>Tea Frappe</td>
            <td>3.01</td>
            <td>3.27</td>
            <td>3.52</td>
          </tr>
          <tr>
            <td>Chai Frappe</td>
            <td>4.20</td>
            <td>4.77</td>
            <td>5.26</td>
          </tr>
          <tr>
            <td>Matcha Frappe</td>
            <td>4.20</td>
            <td>4.77</td>
            <td>5.26</td>
          </tr>
          <tr>
            <td>Milkshake</td>
            <td>4.77</td>
            <td>5.25</td>
            <td>5.78</td>
          </tr>
          <tr>
            <td>Smoothie</td>
            <td>4.77</td>
            <td>5.25</td>
            <td>5.78</td>
          </tr>
          <tr>
            <td>Add Yogurt</td>
            <td></td>
            <!-- Blank cell used to ensure price is aligned with the middle column -->
            <td colspan="2">0.80</td>
          </tr>
          <tr>
            <td>Matcha or Protein</td>
            <td></td>
            <td colspan="2">1.05</td>
          </tr>
          <tr>
            <td><b>COFFEE</b></td>
            <td>1 Shot</td>
            <td>2 Shots</td>
            <td>3 Shots</td>
          </tr>
          <tr>
            <td>Cappuccino Frappe</td>
            <td>3.76</td>
            <td>4.41</td>
            <td>4.77</td>
          </tr>
          <tr>
            <td>Sweet Capp Frappe</td>
            <td>4.20</td>
            <td>4.81</td>
            <td>5.17</td>
          </tr>
          <tr>
            <td>Caramel Frappe</td>
            <td>4.49</td>
            <td>4.95</td>
            <td>5.41</td>
          </tr>
          <tr>
            <td>Mocha Frappe</td>
            <td>4.49</td>
            <td>4.95</td>
            <td>5.41</td>
          </tr>
          <tr>
            <td>Flavoured Mocha Frappe</td>
            <td>5.17</td>
            <td>5.41</td>
            <td>6.02</td>
          </tr>
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
          <tr>
            <td>Iced Chai</td>
            <td>4.01</td>
            <td>4.41</td>
            <td>4.81</td>
          </tr>
          <tr>
            <td>Iced Matcha</td>
            <td>4.66</td>
            <td>4.95</td>
            <td>5.41</td>
          </tr>
          <tr>
            <td>Iced Tea (In-House)</td>
            <td>2.50</td>
            <td>2.50</td>
            <td>2.50</td>
          </tr>
          <tr>
            <td>Iced Tea Mix - Flavours</td>
            <td>2.09</td>
            <td>2.42</td>
            <td>2.60</td>
          </tr>
          <tr>
            <td>Italian Soda</td>
            <td>2.36</td>
            <td>2.99</td>
            <td>3.40</td>
          </tr>
          <tr>
            <td>Italian Cream Soda</td>
            <td>2.66</td>
            <td>3.21</td>
            <td>3.81</td>
          </tr>
          <tr>
            <td colspan="4"><b>COFFEE</b></td>
          </tr>
          <tr>
            <td>Iced Coffe</td>
            <td>2.05</td>
            <td>2.38</td>
            <td>2.66</td>
          </tr>
          <tr>
            <td>Iced Americano</td>
            <td>2.14</td>
            <td>2.79</td>
            <td>3.41</td>
          </tr>
          <tr>
            <td>Sweet Iced Cappuccino</td>
            <td>4.20</td>
            <td>4.81</td>
            <td>5.17</td>
          </tr>
          <tr>
            <td>Iced Cappuccino</td>
            <td>3.76</td>
            <td>4.41</td>
            <td>4.77</td>
          </tr>
          <tr>
            <td>Iced Mocha</td>
            <td>4.16</td>
            <td>4.69</td>
            <td>5.20</td>
          </tr>
          <tr>
            <td>Iced Flavored Mocha</td>
            <td>4.69</td>
            <td>5.17</td>
            <td>5.70</td>
          </tr>
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