<!-- 
  Tyson Foster dgl123
  template for the website footer 
-->
<footer>
  <div id="footer-nav">
    <a href="index.php">Home</a>
    <a href="games-and-events.php">Games/Events</a>
    <a href="store.php">Store</a>
    <a href="menu.php">Menu</a>
    <a href="contact.php">Contact Us</a>
  </div>

  <!--google map embed-->
  <iframe id="map"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5162.161014972256!2d-124.9996989788694!3d49.69045672431574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548813f31559e059%3A0xfda1aad411aa1df9!2sGames%20And%20Grounds%20Coffee%20House!5e0!3m2!1sen!2sca!4v1637083609676!5m2!1sen!2sca"
    width="300" height="250" allowfullscreen="" loading="lazy">
  </iframe>
  <a class="facebook" href="https://www.facebook.com/GamesandGrounds/">
    <img src="images/f_logo_RGB-Blue_58.png" alt="facebook" width="50" />
  </a>
  <div class="contact">
    <p>#103-576 England Avenue Courtenay, BC, Canada</p>
    <p>V9N 2N3</p>
    <p>(250)871-1171</p>
    <p>gamesandgrounds@gmail.com</p>
  </div>
  <!-- Website Disclaimer-->
  <p class="disclaimer">This is a fictional website that was designed and coded as an educational exercise.
    It is not intended to be seen outside of the class environment.
    None of the content and images were approved by the business owner.</p>
</footer>
<script>
  //script for responsive nav bar from codepen
  function showNav() {
    var element = document.getElementById("nav-items");
    element.classList.toggle("show-items");
  }
</script>