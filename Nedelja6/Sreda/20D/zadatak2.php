<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Написати функцију која враћа div унутар којег се налази N span елемената који за текст имају
    редом бројеве од 1 до N</p>

    <?php   
        function retDiv($n){
            return "<div></div>";
        }
        
        $n = mt_rand(5,10);
        echo "<div>";
        $rbr = 0;
        for($i=1; $i<=$n; $i++){
            echo "<span>$i</span> <br>";
        }
        echo "</div>";

        retDiv($n);
    ?>
</body>
</html>