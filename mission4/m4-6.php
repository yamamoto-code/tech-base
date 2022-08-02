<?php
  $dsn = 'mysql:dbname=tb240118db;host=localhost';
  $user = 'tb-240118';
  $password = 'Fre7Y6Xgs5';
  $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

  $sql = 'SELECT * FROM tbtest';
  $stmt = $pdo->query($sql);
  $results = $stmt->fetchAll();
  foreach ($results as $row){
      echo $row['id'].',';
      echo $row['name'].',';
      echo $row['comment'].'<br>';
  echo "<hr>";
  }
?>