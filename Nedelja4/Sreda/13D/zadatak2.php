<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align:center;
            font-size:40px;
        }
    </style>
</head>
<body>
    <?php
        $a = mt_rand(1,50);
        echo $a. "<br/>";
        $b = mt_rand(1,50);
        echo $b. "<br/>";
        $c = mt_rand(1,50);
        echo $c. "<br/>";
        echo "<hr/>";
        if($a < $b and $a < $c and $b < $c){
            echo "$a; $b; $c";
        }elseif($a > $b and $a > $c and $b > $c){
            echo "$c; $b; $a";
        }elseif($b < $a and $b < $c and $a < $c){
            echo "$b; $a; $c";
        }elseif($b > $a and $b > $c and $c > $a){
            echo "$a; $c; $b";
        }elseif($c < $a and $c < $b and $a < $b){
            echo "$c; $a; $b";
        }else{
            echo "$b; $c; $a";
        }
    ?>
</body>
</html>