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
        
        $a = $_GET['broj1'];
        $b = $_GET['broj2'];
        $c = $_GET['broj3'];
        $d = $_GET['broj4'];

        $z1 = 0;
        $z2 = 0;

            if ($b > $a && $d > $c ) {
                for ($i = $a; $b >= $i; $i++) {
                    if ($i % 4 == 0) {
                        $z1 += $i;       
                    }
                } 
                for ($s = $c; $d >= $s; $s++) {
                    if ($s % 3 == 0) {
                        $z2 += $s;       
                    }
                } 
                if ($z1 > $z2) {
                    echo "Rezultat 1 je: $z1 <br> Rezultat 2 je: $z2 <br> Veci je rezultat 1 = $z1";
                }
                else if ($z2 > $z1) {
                    
                    echo "Rezultat 1 je: $z1 <br> Rezultat 2 je: $z2 <br> Veci je rezultat 2 = $z2";
                }
                else {
                    echo "Rezultat 1 je: $z1 <br> Rezultat 2 je: $z2 <br> Jednaki su!";
                }
            }
            else {
                die('Nije moguce izracunati');
            }
    ?>
</body>
</html>