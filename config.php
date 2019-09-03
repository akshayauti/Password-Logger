<?php
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $dbname = 'assignment';
  // Set DSN
  $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
  // Create a PDO instance
  $connection = new PDO($dsn, $user, $password);
  // Set PDO::FETCH_OBJ as fetch() default attributes
  $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


?>
