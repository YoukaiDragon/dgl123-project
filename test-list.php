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

//populate test table with sample data

//test that updateBoolColumn works for changing the 'paid' column for the given row

//test that updateBoolColumn works for changing the 'visible' column for the given row

//test that nothing happens when updateBoolColumn is given an id that is not in the database


//delete test table when done
$sql = "DROP TABLE $tableName";
$results = $conn->query($sql);
echo "<p>TESTING COMPLETE</p>";

/*function used to test the updateBoolColumn function
$expected should be 1 for tests where a row should be affected,
or 0 for tests where no rows should be affected
*/
function testUpdate($test, $expected, $conn, $row, $column, $value) {
  //attempt to perform the update
  updateBoolColumn($conn, $row, $column, $value);
  if ($conn->affected_rows == $expected) {
    echo "<p>TEST PASSED FOR $test</p>";
  } else {
    echo "<p>TEST FAILED FOR $test</p>";
  }
}