<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_1-22</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="str" value="コメント">
        <input type="submit" name="送信">
    </form>
    
    <?php
        if(!empty($_POST["str"])){
            $str = $_POST["str"];
            echo $str."を受け取りました";
        }
    ?>
</body>
</html>
