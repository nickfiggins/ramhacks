<!-- this should connect to the database -->
<?php
  $mysqli = new mysqli('35.196.77.133', 'yager', 'yageryager', 'car_real_info');
  if ($mysqli -> connect_errno) {
    echo "Error:  Failed to make a MySQL connection: \n";
    echo "Errno:  " . $mysqli->connect_errno . "\n";
    echo "Error:  " . $mysqli->connect_error . "\n";
  }
  $sql = "SELECT * FROM entries2 WHERE status = 'available'";
  $result = $mysqli -> query($sql);
  while($row = $result->fetch_assoc()) {
    echo "<tr onclick=\"window.location='car.php?id=" . $row['entryID'] . "';\">";
    echo "<td>" . $row['make'] . "</td>";
    echo "<td>" . $row['model'] . "</td>";
    echo "<td>" . $row['year'] . "</td>";
    echo "<td>" . $row['color'] . "</td>";
    echo "<td>" . $row['milage'] . "</td>";
    echo "<td>" . $row['status'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td>" . $row['URL'] . "</td>";
    echo "</tr>";
  }
 ?>
