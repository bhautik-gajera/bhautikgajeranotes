<?php
     $dbhost = "localhost";
     $dbusername = "root";
     $dbpassword = "";
     $dbname = "bhautikgajeranotes";

     $conn = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);

     if (!$conn) {
          mysqli_error();
     }
 ?>
