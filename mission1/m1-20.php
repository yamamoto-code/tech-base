<!DOCTYPE htlm>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_1-20</title>
</head>
<body>
    <form action="" method="post">
        <input type="string" name="str">
        <input type="submit" name="submit">
    </form>
    <?php 
        $str = $_POST["str"];
        echo $str;
    ?>
</body>
</htlm>