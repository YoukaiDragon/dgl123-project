<?php include "templates/head.php" ?>
  <title>Games and Grounds Store</title>
  <link rel="stylesheet" href="styles/store-style.css" />
</head>
<?php include "templates/header.php" ?>
    <h1>Products</h1>
    <div id="featured">
      <h2>Featured</h2>
      <div id="featured-products">
        <figure>
          <img src="images/Waterdeep.JPG" alt="Lords of Waterdeep" width="100" />
          <figcaption>Lords of Waterdeep<span class="price"><br>$50.99</span></figcaption>
        </figure>
        <figure>
          <img src="images/BetrayalAtHouse.JPG" alt="Betrayal at House on the Hill" width="100" />
          <figcaption>Betrayal at House on the Hill<span class="price"><br>$54.99</span></figcaption>
        </figure>
        <figure>
          <img src="images/ForgottenRealmsBundle.png" alt="Forgotten Realms Bundle" width="100" />
          <figcaption>Forgotten Realms Bundle<span class="price"><br>$44.99</span></figcaption>
        </figure>
        <figure>
          <img src="images/TombOfAnnil-TrapsSet.jpg" width="100" />
          <figcaption>
            Icons of the Realms Tomb of Annihliation: Tombs and Traps Premium Set <span class="price"><br>$50.00</span>
          </figcaption>
        </figure>
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
      <figure>
        <img src="images/Waterdeep.JPG" alt="Lords of Waterdeep" width="100" />
        <figcaption>Lords of Waterdeep<span class="price"><br>$50.99</span></figcaption>
      </figure>
      <figure>
        <img src="images/Catan.JPG" alt="Settlers of Catan" width="100" />
        <figcaption>Setters of Catan<span class="price"><br>$47.99</span></figcaption>
      </figure>
      <figure>
        <img src="images/Takenoko.JPG" alt="Takenoko" width="100" />
        <figcaption>Takenoko<span class="price"><br>$51.99</span></figcaption>
      </figure>
      <figure>
        <img src="images/BetrayalAtHouse.JPG" alt="Betrayal at House on the Hill" width="100" />
        <figcaption>Betrayal at House on the Hill<span class="price"><br>$54.99</span></figcaption>
      </figure>
      <figure>
        <img src="images/Betrayal-WidowsWalk.JPG" alt="Betrayl at House on the Hill: Widows Walk" width="100" />
        <figcaption>
          Betrayal at House on the Hill: Widow's Walk Expansion<span class="price"><br>$44.99</span>
        </figcaption>
      </figure>
      <figure>
        <img src="images/TerraformMars.JPG" alt="Terraforming Mars" width="100" />
        <figcaption>Terraforming Mars<span class="price"><br>$59.99</span></figcaption>
      </figure>
      <figure>
        <img src="images/Citadels.JPG" alt="Citadels" width="100" />
        <figcaption>Citadels<span class="price"><br>$19.99</span></figcaption>
      </figure>
      <figure>
        <img src="images/ElderSign.JPG" alt="Elder Sign" width="100" />
        <figcaption>Elder Sign<span class="price"><br>$37.99</span></figcaption>
      </figure>
      <figure>
        <img src="images/SmashUp.JPG" alt="Smash Up" width="100" />
        <figcaption>Smash Up<span class="price"><br>$30.99</span></figcaption>
      </figure>
      <figure>
        <img src="images/Smash-Awesome.JPG" alt="Smash Up: Awesome Level 9000" width="100" />
        <figcaption>Smash Up: Awesome Level 9000<span class="price"><br>$21.89</span></figcaption>
      </figure>
      <figure>
        <img src="images/Smash-YourFault.JPG" alt="Smash Up: It's Your Fault!" width="100" />
        <figcaption>Smash Up: It's Your Fault!<span class="price"><br>$24.99</span></figcaption>
      </figure>
    </div>

    <div id="Cards" class="tabcontent">
      <h2>MTG Cards</h2>
      <p class="note">Many MTG singles also available in store!</p>
      <figure>
        <img src="images/Commander2019.png" alt="Commander 2019 Decks" width="100" />
        <figcaption>Commander 2019 Decks<span class="price"><br>$69.99</span></figcaption>
      </figure>
      <figure>
        <img src="images/IkoriaCommander.jpg" alt="Ikoria Commander Decks" width="100" />
        <figcaption>Ikoria Commander Decks<span class="price"><br>$64.99</span></figcaption>
      </figure>
      <figure>
        <img src="images/MTGChallenger.jpg" alt="MTG Challenger Decks" width="100" />
        <figcaption>Challenger Decks<span class="price"><br>$34.99</span></figcaption>
      </figure>
      <figure>
        <img src="images/ForgottenRealmsBundle.png" alt="Forgotten Realms Bundle" width="100" />
        <figcaption>Forgotten Realms Bundle<span class="price"><br>$44.99</span></figcaption>
      </figure>
    </div>

    <div id="Accessories" class="tabcontent">
      <h2>Accessories</h2>
      <figure>
        <img src="images/TombOfAnnil-TrapsSet.jpg" alt="Tombs of Annihilation: Tombs and Traps Premium Set"
          width="100" />
        <figcaption>
          Icons of the Realms Tomb of Annihiliation: Tombs and Traps Premium Set <span class="price"><br>$50.00</span>
        </figcaption>
      </figure>
      <figure>
        <img src="images/poly-dice.jpg" alt="polyhedral dice" width="100" />
        <figcaption>Polyhedral Dice Set<span class="price"><br>$8.99</span></figcaption>
      </figure>
      <figure>
        <img src="images/bugbear_miniatures.jpg" alt="D&D miniatures" width="100" />
        <figcaption>D&D miniatures<span class="price"><br>$4.99</span></figcaption>
      </figure>
      <figure>
        <img src="images/DrgShldW.JPG" alt="Dragon Shield White Sleeves" width="100" />
        <figcaption>Dragon Shield Sleeves: White Matte<span class="price"><br>$11.99</span></figcaption>
      </figure>
      <figure>
        <img src="images/DrgShldR.JPG" alt="Dragon Shield Red Sleeves" width="100" />
        <figcaption>Dragon Shield Sleeves: Red Matte<span class="price"><br>$11.99</span></figcaption>
      </figure>
      <figure>
        <img src="images/DrgShldG.JPG" alt="Dragon Shield Green Sleeves" width="100" />
        <figcaption>Dragon Shield Sleeves: Green Matte<span class="price"><br>$11.99</span></figcaption>
      </figure>
      <figure>
        <img src="images/DrgShldSB.JPG" alt="Dragon Shield Sky Blue Sleeves" width="100" />
        <figcaption>Dragon Shield Sleeves: Sky Blue Matte<span class="price"><br>$11.99</span></figcaption>
      </figure>
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