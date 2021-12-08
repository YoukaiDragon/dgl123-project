<?php include "templates/head.php" ?>
  <title>Games & Grounds Contact</title>
  <link rel="stylesheet" href="styles/contact-style.css" />
</head>
<?php 
//Ensure this list contains the names for all of the event options in the form
$event_list = array("none", "D&D", "Commander", "FNM", "Draft"); 
?>
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
          <input type="text" id="name" name="name" required
            value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>" />
        </li>
        <li>
          <label for="mail">Email<span class="required">*</span>:</label>
          <input type="email" id="mail" name="mail" required
            value="<?php if (isset($_POST['mail'])) echo $_POST['mail']; ?>" />
        </li>
        <li class="message">
          <label for="message">Message:</label>
          <textarea id="message" name="message" rows="6" cols="30" maxlength="500">
          <?php if (isset($_POST['message'])) echo $_POST['message']; ?>
          </textarea>
        </li>
        <li>
          <label for="event">Event:</label>
          <select id="event" name="event">
            <option value="none" selected>None</option>
            <option value="D&D" 
              <?php if(isset($_POST['event'])&& $_POST['event']=="D&D") echo 'selected="selected"'; ?>>D&D & Pizza Night (pizza: $4.99)</option>
            <option value="Commander"
              <?php if(isset($_POST['event'])&& $_POST['event']=="Commander") echo 'selected="selected"'; ?>>
              Commander & Pizza night (seat: $4.20 pizza: $4.99)
            </option>
            <option value="FNM"
              <?php if(isset($_POST['event'])&& $_POST['event']=="FNM") echo 'selected="selected"'; ?>>FNM ($4.20)</option>
            <option value="Draft"
              <?php if(isset($_POST['event'])&& $_POST['event']=="Draft") echo 'selected="selected"'; ?>>MTG Draft ($19.99)</option>
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
          <button type="submit" name="submit" value="submit">Submit</button>
        </li>
      <?php if (isset($_POST['submit'])) {
        $validation = handleForm($event_list, false);
        if ($validation === 1) { //data validated and saved to database
          echo "<li><p>MESSAGE SENT</p></li>";
        } else if ($validation === 0) { //data not valid
          echo "<p>ERROR: invalid form data</p>";
        } else if ($validation === -1) { //data not saved to database
          echo "<p>CONNECTION ERROR: there was a problem sending your message</p>";
        }
      }
      ?>
      </ul>
    </form>
  </main>
  <?php include "templates/footer.php" ?>
</body>
<?php
  //functions used to make code testable

  /*
    Validate and handle form data. Returns an integer based on results of validation and handling:
    -1: an error was encountered when uploading form contents to database
    0: some of the form data was invalid
    1: no issues
    $event_list passed in so that it can be managed at the top of the file where it is more visible
    $isTest is a boolean flag used to indicate if the code is being run via the main website,
    or by the test code, and is used to allow the function to be tested independantly of
    the uploadFormData function
  */
  function handleForm($event_list, $isTest) {
    $name = $email = $message = $event = NULL;
    if (isset($_POST['name'])) {
      $name = $_POST['name'];
    } else {
      //$name is required, validation error
      return 0;
    }
    if (isset($_POST['mail'])) {
      $email = $_POST['mail'];
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return 0;
      }
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
      if (!in_array($event, $event_list)) {
        return 0;
      }
    } else {
      //if event is not set, default to 'none'
      $_POST['event'] = 'none';
    }
    //return 1 if code is being tested, or upload form data if being run for real
    if ($isTest) {
      return 1;
    } else {
      //set table name here so that test code can use a separate table
      $table = 'contact_data';
      return uploadFormData($table, $name, $email, $event, $message);
    }
  }


  //send form data to database
  function uploadFormData($table, $name, $email, $event, $message){
    $conn = mysqli_connect('localhost', 'root', '', 'dgl123-project');
    $sql = "INSERT INTO $table (customerName, email, activity, comment) VALUES (?, ?, ?, ?)";
    $statement = $conn->prepare($sql);
    $statement->bind_param('ssss', $name, $email, $event, $message);
    if ($statement->execute()) {
      return 1;
    } else {
      return -1;
    }
  }
?>
</html>