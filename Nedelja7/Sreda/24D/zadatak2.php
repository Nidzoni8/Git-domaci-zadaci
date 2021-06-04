<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napisati fju koja za dati niz koji predstavlja kolika je uspesnost uradjenih domacih po danima ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'>28, 'petak=>28] pronalazi:
    Koji dan je najuspesniji
    Kolika je prosecna uspesnost
    </p>

    <?php
        $x = ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'=>28, 'petak'=>28];

        function mostsuccessfull($x){
            $max = 0;
            $ind = "";
            foreach($x as $subject=>$homework){
                if($max < $homework){  
                    $max = $homework;
                    $ind = $subject;
                }
            }
            echo "Najuspesniji dan je $ind - a broj uradjenih domacih je $max";
        }
        mostsuccessfull($x);
        echo "<br>";

        function averageGrade($x){
            $average = 0;           
            $homework_asoc =['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'=>28, 'petak'=>28];
            foreach($homework_asoc as $i=>$el){
                $average = $average + $el;
            }
            $average1 = $average / count($homework_asoc);
            echo  "Prosecna uspesnost domacih zadataka je: $average1";
        }
        averageGrade($x);
        echo "<br>";
                
    ?>
</body>
</html>