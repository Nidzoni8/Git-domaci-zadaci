<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p>Написати функцију која враћа N div елемената који имају M span елемената,
    који имају текст од 1 до M</p>

    <?php
    function createDivs($n, $m){
        $result = "";
        for($i=1; $i<=$n; $i++){
            $result .= "<div>";
            for($j=1; $j<=$m; $j++){
                $result .= "<span>$j</span>";
            }
        $result .= "</div>";
        }
        return $result;
    }
    $n = mt_rand(1,10);
    $m = mt_rand(1,5);
    echo createDivs($n, $m);
    ?>
</body>
</html>