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
        if(isset($_GET["ime_prezime"])) 
        $ime_prezime = $_GET["ime_prezime"]; 
        $inicijal_i = strtoupper(substr($ime_prezime,0,1));
        $inicijal_r = strpos($ime_prezime, " ", 1);
        $inicijal_r2 = $inicijal_r + 1;
        $inicijal_p = strtoupper(substr($ime_prezime,$inicijal_r2,1));
        echo "$inicijal_i.$inicijal_p";
    ?>
</body>
</html>