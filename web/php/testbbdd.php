<?php
  $servername = "sql11.freemysqlhosting.net";
  $dbdname = "sql11409601";
  $username = "sql11409601";
  $password = "K7C9EmrCjn";

  //phpinfo();
  //exit;
  
  try {
      $mbd = new PDO('mysql:host=$servername;dbname=$dbdname', $username, $password);
      /*
      foreach($mbd->query('SELECT * from users') as $fila) {
          print_r($fila);
      }
      */
      $mbd = null;
  } catch (PDOException $e) {
      print "¡Error!: " . $e->getMessage() . "<br/>";
      die();
  }

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
?>