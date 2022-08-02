<?php
  $dsn = 'mysql:dbname=tb240118db;host=localhost';
  $user = 'tb-240118';
  $password = 'Fre7Y6Xgs5';
  $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

  $id = 2;
  $sql = 'delete from tbtest where id=:id';
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->execute();
?>