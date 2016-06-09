<?php
    /**
     *
     */

    class Locations
    {
      function GetLocationsDb()
      {
        $dbc = mysqli_connect('sql7.freemysqlhosting.net', 'sql7121595', '9sNMlfRDwL', 'sql7121595')
        or die ('Error connecting to the database server');

          $query = "SELECT name,locationID FROM locations";
          $result = mysqli_query($dbc,$query)or die('error');

          if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              $locationName =  $row["name"];
              $locationID =  $row["locationID"];
              echo "<li onclick='DisplayInfos(\"$locationName\",\"$locationID\")'><a href='#'>$locationName</a></li>";
          }
      } else {
          echo "0 results";
      }
      }
    }


 ?>
