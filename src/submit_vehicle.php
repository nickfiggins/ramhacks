<?php
  $make = htmlentities($_GET['make']);
  $model = htmlentities($_GET['model']);
  $year = htmlentities($_GET['year']);
  $color = htmlentities($_GET['color']);
  $mileage = htmlentities($_GET['mileage']);
  $status = htmlentities($_GET['status']);
  $price = htmlentities($_GET['price']);

  $mysqli = new mysqli('35.196.77.133', 'yager', 'yageryager', 'car_real_info');
  if ($mysqli -> connect_errno) {
    echo "Error:  Failed to make a MySQL connection: \n";
    echo "Errno:  " . $mysqli->connect_errno . "\n";
    echo "Error:  " . $mysqli->connect_error . "\n";
  }
  $sql = "INSERT INTO entries2(make, model, year, color, mileage, status, price) VALUES ('" . $make . "', '" . $model . "', '" . $year . "', '" . $color . "', '" . $mileage . "', '" . $status . "', '" . $price . "')";

  $result = $mysqli -> query($sql);
  header("Location: index.php");
?>
