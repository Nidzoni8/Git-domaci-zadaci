<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napisati fju koja za dati niz stringova pomocu fje "palindrom" ispituje i prikazuje samo palindrome tog niza.  Npr za niz "potop", "buducnost", "lul", "nije"  prikazuje reci "potop" i "lul".</p>

    <?php
        function palindrom($x){ 
            foreach($x as $str)
            if($str === strrev($str))
                echo "$str <br>" ;
        }
        palindrom(["potop", "buducnost", "lul", "nije"]);
    ?>
</body>
</html>