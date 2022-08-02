<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_3-1</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="名前">
        <input type="text" name="comment" placeholder="コメント">
        <input type="submit" name="送信">
    </form>
    
    <?php
        
        if(!empty($_POST["name"]) && !empty($_POST["comment"])){
            $name = $_POST["name"];
            $comment = $_POST["comment"];
            $filename = "mission_3-1.txt";
            $date = date("Y年m月d日 H:i:s");
            
            $fp = fopen($filename, "a");
            $count = count(file($filename)) + 1;
            
            fwrite($fp, $count."<>".$name."<>".$comment."<>".$date.PHP_EOL);
            fclose($fp);
        }
    ?>
</body>
</html>