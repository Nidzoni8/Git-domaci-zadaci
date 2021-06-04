<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napisati fju koja vraca true ako neki dati niz ne sadrzi nule, a u suprotnom vraca false.</p>

    <?php
        $x =[2,4,5,8,7,0,9,3,1];
        print_r($x);
         function ifcontains_zero($x){
            $zero = true;
            for($i=0; $i<count($x); $i++)
                if($x[$i] = 0)
                    $zero = false;
                    echo "Niz ima nulu";
            return $zero;
        }
        ifcontains_zero($x);
    ?>
</body>
</html>