<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_3-2</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="名前">
        <input type="text" name="comment" placeholder="コメント">
        <input type="submit" name="送信">
    </form>
    
    <?php
        $filename = "mission_3-2.txt";
        
        if(!empty($_POST["name"]) && !empty($_POST["comment"])){
            $name = $_POST["name"];
            $comment = $_POST["comment"];
            $date = date("Y年m月d日 H:i:s");
            
            $fp = fopen($filename, "a");
            $count = count(file($filename)) + 1;
            fwrite($fp, $count."<>".$name."<>".$comment."<>".$date.PHP_EOL);
            fclose($fp);
        }
        
        
        if(file_exists($filename)){
            $lines = file($filename, FILE_IGNORE_NEW_LINES);
            foreach($lines as $line){
                $line = explode("<>", $line);
                echo $line[0]." ".$line[1]." ".$line[2]." ".$line[3]."<br>";
            }
        }
    ?>
</body>
</html>