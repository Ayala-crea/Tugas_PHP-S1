<!DOCTYPE html>
<html lang="en">
<head>
<title>pemerosesan file</title>
</head>
<body>
    <h2>penulisan data</h2>
    <?php
    $file="C:\\Teks.txt";
    $fo=fopen("$file","w");
    $data='tes fwriter OK in'.$file.' !';
    fclose($fo);
    fwriter($fo, $data);
    echo("cek isi file di <b> $file </b> !");
    ?>
</body>
</html>