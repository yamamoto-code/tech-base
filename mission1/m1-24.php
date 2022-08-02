<!DOCTYPE htlm>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_1-24</title>
</head>
<body>
    <?php 
        $fp = fopen("mission_1-24.txt", "a");
    
        $str = "Hello World!";
    
        fwrite($fp, $str.PHP_EOL);
    
        fclose($fp);
    
        echo "書き込み成功!";
    ?>
</body>
</htlm>



