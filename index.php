<?php include "templates/head.php" ?>
  <title>Games & Grounds</title>
  <link rel="stylesheet" href="styles/home-style.css" />
</head>
<?php include "templates/header.php" ?>
    <section class="intro">
      <h1>Games & Grounds Coffee House</h1>
      <p>
        Food & drinks PLUS tons of ways to play. Gaming computers, consoles +
        tables set up for board, cards & more! Retail section for games &
        gaming supplies. Weekly Events for Magic: the Gathering and Dungeons & Dragons.
      </p>
    </section>
    <!--Page links-->
    <section id="links-nostore">
      <div class="events-link">
        <a href="games-and-events.php">
          <h2>Games and Events</h2>
          <img src="images/pexels-ylanite-koppens-776654.webp" alt="games and events" width="300" />
        </a>
      </div>
      <div class="menu-link">
        <a href="menu.php">
          <h2>Menu</h2>
          <img src="images/kevin-butz-_IHk34tRKaE-unsplash.webp" alt="menu" width="300" />
        </a>
      </div>
      <div class="register">
        <a href="contact.php">
          <h2>Register for Events</h2>
        </a>
      </div>
    </section>
    <!--Links to store page that open appropriate tabs-->
    <section id="links-store">
      <h2>Products for Sale</h2>
      <div>
        <div class="store-boardgames">
          <a href="store.php#board">
            <h3>Board Games</h3>
            <img src="images/aksel-fristrup-w7eaCH6ShR4-unsplash.webp" alt="board games" width="300" />
          </a>
        </div>
        <div class="store-cards">
          <a href="store.php#cards">
            <h3>MTG Cards</h3>
            <img src="images/mtgCards.webp" alt="MTG Cards" width="300" />
          </a>
        </div>
        <div class="store-accessories">
          <a href="store.php#accessories">
            <h3>Accessories</h3>
            <img src="images/alperen-yazgi-QuP5RL_E5oE-unsplash.webp" alt="game accessories" width="300" />
          </a>
        </div>
      </div>
    </section>
  </main>
  <?php include "templates/footer.php" ?>
</body>
</html>