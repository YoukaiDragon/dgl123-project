<?php include "contact.php" ?>
<!--
Tyson Foster dgl123
this code is for testing the functionality of the form on contact.php
-->
<p>BEGIN TEST FOR contact.php</p>
<?php
//name for the table used for testing
$tableName = "testTable";
//make sure these two variable match those with the same name in contact.php
$conn = mysqli_connect('localhost', 'root', '', 'dgl123-project');
$event_list = array("none", "D&D", "Commander", "FNM", "Draft");
//make a table that copies the format of contact_data
$sql = "CREATE TABLE $tableName (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customerName` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `activity` varchar(255) COLLATE utf8_bin NOT NULL,
  `paid` tinyint(1) NOT NULL DEFAULT '0',
  `comment` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
)";
$results = $conn->query($sql);
/*
Values for the form fields that are supposed to work. These are used when the associated fields are not
being tested, to ensure that there is only 1 field that could cause the validation error
*/
$goodName = "Valid";
$goodEmail = "valid@goodexample.com";
$goodMessage = "This is a valid message.";
$goodEvent = "Commander";

echo "<p>BELOW TEST MUST PASS FOR OTHER VALIDATION TESTS TO BE RELIABLE</p>";
validationTest("good", true, $goodName, $goodEmail, $goodMessage, $goodEvent, $event_list);
echo "<p>ABOVE TEST MUST PASS FOR OTHER VALIDATION TESTS TO BE RELIABLE</p>";

//bad input tests

//missing values
//submission must include name
$badName = NULL;
validationTest ("No Name", false, $badName, $goodEmail, $goodMessage, $goodEvent, $event_list);

//submission must include email
$badEmail = NULL;
validationTest ("No Email", false, $goodName, $badEmail, $goodMessage, $goodEvent, $event_list);

//missing message is ok
$badMessage = NULL;
validationTest ("No message", true, $goodName, $goodEmail, $badMessage, $goodEvent, $event_list);

//NULL event should default to 'none' which is acceptable
$badEvent = NULL;
validationTest ("No Event", true, $goodName, $goodEmail, $goodMessage, $badEvent, $event_list);

//bad values

//name validation only checks if there is a value

//email validation
//not an email
$badEmail = "NotAnEmail";
validationTest ("Not Email", false, $goodName, $badEmail, $goodMessage, $goodEvent, $event_list);

//multiple emails
$badEmail = "test1@example.com test2@moreexamples.com";
validationTest ("Multiple Emails", false, $goodName, $badEmail, $goodMessage, $goodEvent, $event_list);

//test for too long string
$badMessage = "a";
//for loop used to generate string > 500 characters long
for ($x = 0; $x < 501; $x++) {
  $badMessage .= "a";
}
validationTest ("Message Too Long", false, $goodName, $goodEmail, $badMessage, $goodEvent, $event_list);

//bad event
$badEvent = "Not a real event";
validationTest ("Bad Event", false, $goodName, $goodEmail, $goodMessage, $badEvent, $event_list);

echo "<p>VALIDATION TESTING COMPLETE</p>";


//delete test table when done
$sql = "DROP TABLE $tableName";
$results = $conn->query($sql);
echo "<p>TESTING COMPLETE</p>";


//function for testing that input validation works as expected
function validationTest($test, $expected, $name, $email, $message, $event, $event_list) {
  //load the inputs into $_POST
  $_POST['name'] = $name;
  $_POST['mail'] = $email;
  $_POST['message'] = $message;
  $_POST['event'] = $event;
  //test the loaded input
  if (handleForm($event_list, true) == $expected) {
    echo "<p>TEST FOR $test PASSED</p>";
  } else {
    echo "<p>TEST FOR $test FAILED</p>";
  }
}

function uploadTest($tableNme, $test, $expected, $name, $email, $message, $event) {

}