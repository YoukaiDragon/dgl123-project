<?php include "templates/head.php" ?>
  <title>Games and Grounds Store</title>
  <link rel="stylesheet" href="styles/store-style.css" />
</head>
<?php include "templates/header.php" ?>
    <h1>Products</h1>
    <div id="featured">
      <h2>Featured</h2>
      <div id="featured-products">
        <?php $conn = mysqli_connect('localhost', 'root', '', 'dgl123-project');

        $sql = "SELECT * FROM store_featured ORDER BY id ASC";
        $results = $conn->query($sql);

        if ($results->num_rows > 0) : ?>
          <?php while($row = $results->fetch_assoc()) : ?>
            <?php $link = $row['link'];
            $name = $row['name'];
            $price = $row['price'];?>
            <figure>
              <?php echo "<img src=$link alt=$name width='100' />";
              echo "<figcaption>$name <span class='price'><br>$$price </span></figcaption>";?>
            </figure>
          <?php endwhile?>
        <?php else : ?>
          <p>ERROR: Store content not available</p>
        <?php endif ?>
      </div>
    </div>

    <!--Tabs for store sections-->
    <div class="tab">
      <button class="tablinks" onclick="openStore(event,'Board')">
        Board Games
      </button>
      <button class="tablinks" onclick="openStore(event,'Cards')">
        MTG Cards
      </button>
      <button class="tablinks" onclick="openStore(event,'Accessories')">
        Accessories
      </button>
    </div>

    <div id="Board" class="tabcontent">
      <h2>Board Games</h2>
      <?php $sql = "SELECT * FROM store_boardgames ORDER BY id ASC";
        $results = $conn->query($sql);

        if ($results->num_rows > 0) : ?>
          <?php while($row = $results->fetch_assoc()) : ?>
            <?php $link = $row['link'];
            $name = $row['name'];
            $price = $row['price'];?>
            <figure>
              <?php echo "<img src=$link alt=$name width='100' />";
              echo "<figcaption>$name <span class='price'><br>$$price </span></figcaption>";?>
            </figure>
          <?php endwhile?>
        <?php else : ?>
          <p>ERROR: Store content not available</p>
        <?php endif ?>
    </div>

    <div id="Cards" class="tabcontent">
      <h2>MTG Cards</h2>
      <p class="note">Many MTG singles also available in store!</p>
      <?php $sql = "SELECT * FROM store_cards ORDER BY id ASC";
        $results = $conn->query($sql);

        if ($results->num_rows > 0) : ?>
          <?php while($row = $results->fetch_assoc()) : ?>
            <?php $link = $row['link'];
            $name = $row['name'];
            $price = $row['price'];?>
            <figure>
              <?php echo "<img src=$link alt=$name width='100' />";
              echo "<figcaption>$name <span class='price'><br>$$price </span></figcaption>";?>
            </figure>
          <?php endwhile?>
        <?php else : ?>
          <p>ERROR: Store content not available</p>
        <?php endif ?>
    </div>

    <div id="Accessories" class="tabcontent">
      <h2>Accessories</h2>
      <?php $sql = "SELECT * FROM store_accessories ORDER BY id ASC";
        $results = $conn->query($sql);

        if ($results->num_rows > 0) : ?>
          <?php while($row = $results->fetch_assoc()) : ?>
            <?php $link = $row['link'];
            $name = $row['name'];
            $price = $row['price'];?>
            <figure>
              <?php echo "<img src=$link alt=$name width='100' />";
              echo "<figcaption>$name <span class='price'><br>$$price </span></figcaption>";?>
            </figure>
          <?php endwhile?>
        <?php else : ?>
          <p>ERROR: Store content not available</p>
        <?php endif ?>
    </div>

    <script>
      //function to mangae tabs (from W3Schools.com)
      function openStore(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(
            " active",
            ""
          );
        }
        document.getElementById(tabName).style.display = "flex";
        evt.currentTarget.className += " active";
      }

      //function to open appropriate tab when user arrives from store category links on home page
      function openDefault(tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(
            " active",
            ""
          );
        }
        document.getElementById(tabName).style.display = "flex";
      }
    </script>
  </main>
  <?php include "templates/footer.php" ?>
  <script>
    //Open apropriate tab if user arrived via homepage store links
    if (window.location.hash === "#board") {
      openDefault("Board");
    } else if (window.location.hash === "#cards") {
      openDefault("Cards");
    } else if (window.location.hash === "#accessories") {
      openDefault("Accessories");
    }

    //Remove hash from address
    var loc = window.location;
    //use pushstate to remove hash without refreshing if possible
    if ("pushState" in history) {
      history.pushState("", document.title, loc.pathname + loc.search);
    } else {
      loc.hash = "";
    }
  </script>
</body>
</html>