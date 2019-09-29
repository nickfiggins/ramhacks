<DOCTYPE! html>
<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<?php
  $mysqli = new mysqli('35.196.77.133', 'yager', 'yageryager', 'car_real_info');
  if ($mysqli -> connect_errno) {
    echo "Error:  Failed to make a MySQL connection: \n";
    echo "Errno:  " . $mysqli->connect_errno . "\n";
    echo "Error:  " . $mysqli->connect_error . "\n";
  }
  $id = $_GET['id'];
  $sql = "SELECT * FROM entries2 WHERE entryID = " .  $id;
  $result = $mysqli -> query($sql);
  $row = $result->fetch_assoc();

  echo "<h1>" . $row['year'] . " " . $row['make'] . " " . $row['model'] . "&nbsp;&nbsp;";
  if ($row['status'] == 'available'){
    echo "<span class='label label-success'>Available</span></h1>";
  } else {
    echo "<span class='label label-warning'>Unavailable</span></h1>";
  }
  echo "<h3>" . $row['color'] . "</h3>";
 ?>
</div>
</body>
