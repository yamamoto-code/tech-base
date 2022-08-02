<!DOCTYPE htlm>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_1-26</title>
</head>
<body>
    <?php 
        $fp = fopen("mission_1-24.txt", "a");
        $str = "おはよう";
        fwrite($fp, $str.PHP_EOL);
        fclose($fp);
        echo "書き込み成功!<br>";
        
        if(file_exists("mission_1-24.txt")){
            $items = file("mission_1-24.txt", FILE_IGNORE_NEW_LINES);
            foreach($items as $item){
                echo $item."<br>";
            }
        }
    ?>
</body>
</htlm>