<?php include "templates/head.php" ?>
  <title>Games & Grounds Contact</title>
  <link rel="stylesheet" href="styles/contact-style.css" />
</head>
<?php include "templates/header.php" ?>
    <h1>Contact Us</h1>
    <!--
      Contact Form for submitting name, email, an optional message, 
      and an optional request to register for an event
    -->
    <form method="POST" action="contact.php">
      <ul>
        <li>
          <label for="name">Name<span class="required">*</span>:</label>
          <input type="text" id="name" name="name" required />
        </li>
        <li>
          <label for="mail">Email<span class="required">*</span>:</label>
          <input type="email" id="mail" name="mail" required />
        </li>
        <li class="message">
          <label for="message">Message:</label>
          <textarea id="message" name="message" rows="6" cols="30" maxlength="500"></textarea>
        </li>
        <li>
          <label for="event">Event:</label>
          <select id="event" name="event">
            <option value="none" selected>None</option>
            <option value="D&D">D&D & Pizza Night (pizza: $4.99)</option>
            <option value="Commander">
              Commander & Pizza night (seat: $4.20 pizza: $4.99)
            </option>
            <option value="FNM">FNM ($4.20)</option>
            <option value="Draft">MTG Draft ($19.99)</option>
          </select>
        </li>
        <li>
          <p class="note"><span class="required">*</span> Indicates a required field</p>
          <p>
            For pizza night events, please indicate if you want pizza in the
            message box
          </p>
        </li>
        <li>
          <button type="submit">Submit</button>
        </li>
      </ul>
      <?php $validation = handleForm();
        if ($validation === 1) { //data validated and saved to database
          
        } else if ($validation === 0) { //data not valid

        } else if ($validation === -1) { //data not saved to database

        }
      ?>
    </form>
  </main>
  <?php include "templates/footer.php" ?>
</body>
<?php
  /*
    Validate and handle form data. Returns an integer based on results of validation and handling:
    -1: an error was encountered when uploading form contents to database
    0: some of the form data was invalid
    1: no issues
  */
  function handleForm() {
    $name = $email = $message = $event = NULL;
    if (isset($_POST['name'])) {
      $name = $_POST['name'];
    } else {
      //$name is required, validation error
      return 0;
    }
    if (isset($_POST['mail'])) {
      $email = $_POST['mail'];
    } else {
      //$mail is required, validation error
      return 0;
    }
    if (isset($_POST['message'])) {
      $message = $_POST['message'];
      if (strlen($message) > 500) {
        //$message exceeds max length
        return 0;
      }
    }
    if (isset($_POST['event'])) {
      $event = $_POST['event'];
    }
  }
?>
</html>