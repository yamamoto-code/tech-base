<?php
    $dsn = 'データベース名';
    $user = 'ユーザ名';
    $password = 'パスワード';
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    
    $sql = "CREATE TABLE IF NOT EXISTS bbs"
    ."("
    ."id INT AUTO_INCREMENT PRIMARY KEY,"
    ."name char(32),"
    ."comment TEXT,"
    ."passwd TEXT,"
    ."date DATETIME"
    .");";
    $stmt = $pdo->query($sql);
    
    $editNo= "";
    $editName="";
    $editComment="";
    
    if(!empty($_POST["edit"]) && !empty($_POST["passwd"])){
        $edit = $_POST["edit"];
        $passwd = $_POST["passwd"];
        $sql = 'SELECT * FROM bbs WHERE id=:id AND passwd=:passwd';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $edit, PDO::PARAM_INT);
        $stmt->bindParam(':passwd', $passwd, PDO::PARAM_STR);
        $stmt->execute();
        $results = $stmt->fetchAll();
        foreach($results as $row){
            $editNo = $row['id'];
            $editName = $row['name'];
            $editComment = $row['comment'];
        }
    }
  
    if(!empty($_POST["name"]) && !empty($_POST["comment"]) && !empty($_POST["passwd"])){
        $name = $_POST["name"];
        $comment = $_POST["comment"];
        $passwd = $_POST["passwd"];
        $date = date("Y-m-d H:i:s");
        if(!empty($_POST["editno"])){
            $editno = $_POST["editno"];
            $sql = 'UPDATE bbs SET name=:name, comment=:comment, passwd=:passwd, date=:date WHERE id=:id';
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
            $stmt->bindParam(':date', $date, PDO::PARAM_STR);
            $stmt->bindParam(':passwd', $passwd, PDO::PARAM_STR);
            $stmt->bindParam(':id', $editno, PDO::PARAM_INT);
            $stmt->execute();
        }else{
            $sql = $pdo -> prepare("INSERT INTO bbs (name, comment, passwd, date) VALUES (:name, :comment, :passwd, :date)");
            $sql -> bindParam(':name', $name, PDO::PARAM_STR);
            $sql -> bindParam(':comment', $comment, PDO::PARAM_STR);
            $sql -> bindParam(':passwd', $passwd, PDO::PARAM_STR);
            $sql -> bindParam(':date', $date, PDO::PARAM_STR);
            $sql -> execute();
        }
    }

    if(!empty($_POST["delete"]) && !empty($_POST["passwd"])){
        $delete = $_POST["delete"];
        $passed = $_POST["passwd"];
        
        $sql = 'delete from bbs where id=:id AND passwd=:passwd';
        $stmt = $pdo -> prepare($sql);
        $stmt -> bindParam(':id', $delete, PDO::PARAM_INT);
        $stmt -> bindParam(':passwd', $passed, PDO::PARAM_STR);
        $stmt -> execute();
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_5-1</title>
</head>
<body>
    <form action="" method="post">
        <input type="hidden" name="editno" value="<?php echo $editNo; ?>">
        <input type="text" name="name" placeholder="名前" value="<?php echo $editName; ?>">
        <input type="text" name="comment" placeholder="コメント" value="<?php echo $editComment; ?>">
        <input type="text" name="passwd" placeholder="パスワード">
        <input type="submit" name="送信">
    </form>
    
    <form action="" method="post">
        <input type="number" name="delete" placeholder="削除対象番号">
        <input type="text" name="passwd" placeholder="パスワード">
        <input type="submit" value="削除">
    </form>
    
    <form action="" method="post">
        <input type="number" name="edit" placeholder="編集対象番号">
        <input type="text" name="passwd" placeholder="パスワード"> 
        <input type="submit" value="編集">
    </form>
    
    <?php
        $sql = 'SELECT * FROM bbs';
        $stmt = $pdo -> query($sql);
        $results = $stmt -> fetchAll();
        foreach($results as $row){
          echo $row['id']." ";
          echo $row['name']." ";
          echo $row['comment']." ";
          echo $row['date']."<br>";
        echo "<hr>";
        }  
    ?>
</body>
</html>
