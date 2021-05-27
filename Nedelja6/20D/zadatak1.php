<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Написати функцију која враћа већи од 3 броја (3 броја су прослеђени функцији кроз параметре)</p>

    <?php
        function returnsLargest($a, $b, $c){
            if($a > $b and $a >$c){
                return $a;
            }elseif($b >$a and $b > $c){
                return $b;
            }else{
                return $c;
            }
        }

        echo returnsLargest(10, 5 ,20);
    
    
    ?>
</body>
</html>