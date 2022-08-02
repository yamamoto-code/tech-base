<!DOCTYPE htlm>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_1-22</title>
</head>
<body>
    <?php 
        $members = array("Ken","Alice","Judy","BOSS","Bob");
        foreach($members as $member) {
            if($member == "BOSS"){
                echo "Good moring ".$member."!<br>";
            } else {
                echo "Hi! ".$member."<br>";
            }
        }
        
    ?>
</body>
</htlm>