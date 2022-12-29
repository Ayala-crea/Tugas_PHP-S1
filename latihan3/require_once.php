<!DOCTYPE html>
<html lang="en">
<head>
<title>Penggunaan Modularisasi</title>
</head>
<body>
    <pre>
        <?php
        require_once("function.php");
        echo("luas segi empat dengan p = 2 dan 1 = 4 adalah".luas(2,4)."<br>");
        require_once("function.php");
        echo("luas segi empat dengan p = 5 dan 1 = 4 adalah ".luas(5,4));
        ?>
    </pre>
</body>
</html>