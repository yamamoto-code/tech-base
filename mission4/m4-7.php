<?php
  $dsn = 'mysql:dbname=tb240118db;host=localhost';
  $user = 'tb-240118';
  $password = 'Fre7Y6Xgs5';
  $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

  $id = 1; 
  $name = "ナカムラ";
  $comment = "おい"; 
  $sql = 'UPDATE tbtest SET name=:name,comment=:comment WHERE id=:id';
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(':name', $name, PDO::PARAM_STR);
  $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->execute();
?>