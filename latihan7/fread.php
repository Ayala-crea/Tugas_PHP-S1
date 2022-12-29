<!DOCTYPE html>
<html lang="en">
<head>
<title>Pemerosesan file</title>
</head>
<body>
    <h2>pembaca data</h2>
    <?php
    $file='C:\\Teks.txt';
    if(file_exists($file)){
        $fo = fopen($file, "r");
        $isi = fread($fo, filesize("$file"));
        echo("Isi dari file <b> $file </b> adalah <b>\" $isi \"</b>");
        fclose($fo);
    }else
    {
        echo("file <b> $file </b> tidak ada !");
    }
    ?>
</body>
</html>