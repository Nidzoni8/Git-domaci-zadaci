<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Napraviti niz od svih brojeva koji su veći od aritmetičke sredine niza (prosečne vrednosti). 
 -->
<body>
    <?php
        $arr = [3,6,4,8,13,5,10];
        $x = [];
        $sum = 0;
        for($i=0;$i<count($arr);$i++){
            $sum+=$arr[$i];
            
        }$arit = $sum/count($arr);
        echo "aritmeticka sredina: $arit<br>";
        for($i=0;$i<count($arr);$i++){
            if($arr[$i]>$arit){
                array_unshift($x,$arr[$i]);
            };
        }echo "X = ".join(",",$x)."<br>";
    ?>
</body>
</html>