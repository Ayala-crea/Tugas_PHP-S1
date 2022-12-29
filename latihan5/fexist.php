<!DOCTYPE html>
<html lang="en">
<head>
<title>pemerosesan file</title>
</head>
<body>
    <h2>pemeriksaan file</h2>
    <?php
    $file = 'C:\\Teks.txt';
    if(file_exists($file))
    {
        echo("file <b> $file </b> sudah ada !");
    }else
    {
        echo("file <b> $file </b> tidak ada !");
    }
    ?>
</body>
</html>