<?php
  $dsn = 'mysql:dbname=tb240118db;host=localhost';
  $user = 'tb-240118';
  $password = 'Fre7Y6Xgs5';
  $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

  $sql = "CREATE TABLE IF NOT EXISTS tbtest"
  ." ("
  . "id INT AUTO_INCREMENT PRIMARY KEY,"
  . "name char(32),"
  . "comment TEXT"
  .");";
  $stmt = $pdo->query($sql);
?>