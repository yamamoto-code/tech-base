<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_3-3</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="名前">
        <input type="text" name="comment" placeholder="コメント">
        <input type="submit" name="送信">
    </form>
    
    <form action="" method="post">
        <input type="number" name="delete">
        <input type="submit" value="削除">
    </form>
    
    <?php
        $filename = "mission_3-3.txt";

        if(!empty($_POST["name"]) && !empty($_POST["comment"])){
            $name = $_POST["name"];
            $comment = $_POST["comment"];
            $date = date("Y年m月d日 H:i:s");

            $fp = fopen($filename, "a");
            $count = count(file($filename)) + 1;
            fwrite($fp, $count."<>".$name."<>".$comment."<>".$date.PHP_EOL);
            fclose($fp);
            
        }
        
        if(!empty($_POST["delete"])){
            $delete = $_POST["delete"];
            $lines = file($filename,FILE_IGNORE_NEW_LINES);
            $fp = fopen($filename, "w");
            
            for($i=0; $i < count($lines); $i++){
                $line = explode("<>", $lines[$i]);
                if($delete != $line[0]){
                    $count = count(file($filename)) + 1;
                    fwrite($fp, $count."<>".$line[1]."<>".$line[2]."<>".$line[3].PHP_EOL);
                    // fwrite($fp, $lines[$i].PHP_EOL);
                }
            }
            fclose($fp);
        }
        
        
        if(file_exists($filename)){
            $lines = file($filename, FILE_IGNORE_NEW_LINES);
            foreach($lines as $line){
                $elements = explode("<>", $line);
                echo $elements[0]." ".$elements[1]." ".$elements[2]." ".$elements[3]."<br>";
            }
        }
    ?>
</body>
</html>