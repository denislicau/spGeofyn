<?php

  $location = ($_GET['location']);
  $id = ($_GET['id']);

  $dbc = mysqli_connect('sql7.freemysqlhosting.net', 'sql7121595', '9sNMlfRDwL', 'sql7121595')
  or die ('Error connecting to the database server');

  $query = "SELECT * FROM locations where name = '".$location."' and locationID = '".$id."'";
  $result = mysqli_query($dbc,$query)or die('error');

  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $locationName =  $row["name"];
      $locationDesc =  $row["description"];
      $locationCrea =  $row["created"];
      echo "<h1> $locationName </h1>";
      echo "<h3> description: <h3>";
      echo "<p> $locationDesc </p>";
      echo "<h3> Created At : <h3>";
      echo "<p> $locationCrea </p>";
  }
}
 ?>
