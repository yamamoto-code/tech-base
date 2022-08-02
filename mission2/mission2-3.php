<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_2-3</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="str" value="コメント">
        <input type="submit" name="送信">
    </form>
    
    <?php
        $filename = "mission2-3.txt";

        if(!empty($_POST["str"])){
            $str = $_POST["str"];
            $fp = fopen($filename, "a");
            fwrite($fp, $str.PHP_EOL);
            fclose($fp);
            
            if($str == "完成！") {
                echo "おめでとう！<br>";
                echo "<br>";
            }else{
                echo $str."を受け取りました<br>";
                echo "<br>";
            }
        }
    ?>
</body>
</html>