<?php
   //local server
   $servername = "";
   $username = "";
   $password = "";
   $dbname = "";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);

   // Check connection
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }

   mysqli_select_db($conn, $dbname);
   mysqli_set_charset($conn, 'utf8'); // <- add this too
   mysqli_query($conn, "SET NAMES 'utf8';");
   mysqli_query($conn, "SET CHARACTER SET 'utf8';");
?>


