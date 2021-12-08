<?php include "list-contacts.php" ?>
<!--
Tyson Foster dgl123
this code is for testing the functionality of the buttons on list-contacts.php
-->
<p>BEGIN TEST FOR list-contacts.php</p>
<?php
//name for the table used for testing
$tableName = "testTable";
//make sure these two variable match those with the same name in contact.php
$conn = mysqli_connect('localhost', 'root', '', 'dgl123-project');
//make a table that copies the format of contact_data
$sql = "CREATE TABLE `$tableName` (
  `id` int(11) NOT NULL,
  `customerName` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `messageDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activity` varchar(255) COLLATE utf8_bin NOT NULL,
  `paid` tinyint(1) NOT NULL DEFAULT '0',
  `comment` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1'
)";
$results = $conn->query($sql);

//populate test table with sample data
$sql ="INSERT INTO `$tableName` (`id`, `customerName`, `email`, `messageDate`, `activity`, `paid`, `comment`, `visible`) VALUES
(1, 'John Doe', 'jdoe@example.com', '2021-12-08 13:14:41', 'Draft', 0, 'This is a test message', 1),
(2, 'Bob', 'bob@example.com', '2021-12-08 13:21:04', 'D&D', 0, 'This is a test message', 1),
(3, 'Rob Johnson', 'rj@testing.com', '2021-12-08 13:23:10', 'Commander', 0, 'This is also a test message', 1),
(4, 'Tyson', 'moretesting@example.com', '2021-12-08 13:23:37', 'Commander', 0, 'No Pizza', 1),
(5, 'Tyson', 'moretesting@example.com', '2021-12-08 13:24:46', 'Draft', 0, '', 1);";
$results = $conn->query($sql);

/*function used to test the updateBoolColumn function
$expected should be 1 for tests where a row should be affected,
or 0 for tests where no rows should be affected
*/
function testUpdate($tableName, $test, $expected, $conn, $row, $column, $value) {
  //attempt to perform the update and store the number of affected rows
  $changeCount = updateBoolColumn($tableName, $conn, $row, $column, $value);
  //select the row that should have been changed
  $sql = "SELECT * FROM $tableName WHERE id=$row";
  $results = $conn->query($sql);
  $entry = $results->fetch_assoc();
  //check that only the desired row was changed, and the target column has the correct value
  if ($changeCount == $expected && $entry["$column"] == $value) {
    echo "<p>TEST PASSED FOR $test</p>";
  } else if ($changeCount == $expected && $expected == 0) {
    //pass condition for testing updates on nonexistent columns 
    echo "<p>TEST PASSED FOR $test</p>";
  } else {
    echo "<p>TEST FAILED FOR $test</p>";
  }
}

//test that updateBoolColumn works for changing the 'paid' column for the given row
testUpdate($tableName, 'change paid column', 1, $conn, 1, 'paid', 1);

//test that updateBoolColumn works for changing the 'visible' column for the given row
testUpdate($tableName, 'change visible column', 1, $conn, 2, 'visible', 0);

//test that nothing happens when updateBoolColumn is given an id that is not in the database
testUpdate($tableName, 'change nonexistent column', 0, $conn, 6, 'paid', 1);

//delete test table when done
$sql = "DROP TABLE $tableName";
$results = $conn->query($sql);
echo "<p>TESTING COMPLETE</p>";