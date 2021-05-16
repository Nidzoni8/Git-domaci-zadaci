<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $i = $_GET['ime'];
        $p = $_GET['prezime'];   
        $inicijal_ime = substr($i,0,1);
        $inicijal_prezime = substr($p,0,1);
        echo "$inicijal_ime.$inicijal_prezime.";
    ?>
</body>
</html>