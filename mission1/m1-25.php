<!DOCTYPE htlm>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_1-25</title>
</head>
<body>
    <?php 
        $fp = fopen("mission_1-25.txt", "w");
    
        $str = "Hello World!";
        $name = "bob";
    
        fwrite($fp, $str.PHP_EOL);
        fwrite($fp, $name.PHP_EOL);
    
        fclose($fp);
    
        echo "書き込み成功!";
    ?>
</body>
</htlm>
