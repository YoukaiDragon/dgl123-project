<!DOCTYPE html>
<html lang="en">
<!--
Tyson Foster dgl123
A page that displays entries from the contact_data table
includes buttons to mark event bookings as paid, and to stop displaying an entry on the page 
-->

<head>
<meta charset="utf-8" />
</head>
<body>

<?php
//set up connection
$conn = mysqli_connect('localhost', 'root', '', 'dgl123-project');

//update entry if a button was clicked
if (isset($_POST['paid'])) {
  //update 'paid' column of entry associated with the button
  updateBoolColumn($conn, $_POST['paid'], 'paid', 1);
}

if (isset($_POST['delete'])) {
  //update 'visible' column of table so that it is no longer displayed by the page
  updateBoolColumn($conn, $_POST['delete'], 'visible', 0);
}

//grab and display table data
$sql = "SELECT * FROM contact_data WHERE visible=1 ORDER BY id ASC";
$results = $conn->query($sql); 
?>

<?php if ($results->num_rows > 0) : ?>
<table>
  <tr>
    <th>name</th>
    <th>email</th>
    <th>event</th>
    <th>paid</th>
    <th></th> <!--column for 'payment received' button -->
    <th>comment</th>
    <th></th> <!-- column for 'remove entry' button -->
  </tr>
  <?php while ($row = $results->fetch_assoc()) : ?>
    <tr>
      <td><?= $row['customerName']; ?></td>
      <td><?= $row['email']; ?></td>
      <td><?= $row['activity']; ?></td>
      <?php if ($row['paid'] == 1) :?>
        <td colspan=2>YES</td>
      <?php else :?>
        <td>NO</td>
        <td>
        <form method="post">
          <input name="paid" type="hidden" value="<?= $row['id'] ?>">
          <input type="submit" value="Payment Received">
        </form>
      </td>
      <?php endif ?>
      <td><?= $row['comment']; ?></td>
      <td>
        <form method="post">
          <input name="delete" type="hidden" value="<?= $row['id'] ?>">
          <input type="submit" value="Remove Entry">
        </form>
      </td>
    </tr>
  <?php endwhile ?>
  <?php endif ?>
</table>
</body>
</html>

<?php
/*function to update a boolean column in the table
input is the connection, the id of the row to be changed, 
the name of the column to be changed, and the new value for the column
*/
function updateBoolColumn($conn, $row, $column, $value) {
  $sql = "UPDATE contact_data SET $column = $value WHERE id=$row";
  $results = $conn->query($sql);
}