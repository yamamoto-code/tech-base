<?php
  $dsn = 'mysql:dbname=tb240118db;host=localhost';
  $user = 'tb-240118';
  $password = 'Fre7Y6Xgs5';
  $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

  $sql = 'SHOW CREATE TABLE tbtest';
  $result = $pdo -> query($sql);
  foreach($result as $row){
    echo $row[1];
  }
  echo "<hr>";
?>