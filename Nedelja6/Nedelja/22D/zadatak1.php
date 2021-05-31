<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napisati fju koja za dati niz brojeva izracunava i prikazuje da li ima vise trocifrenih ili dvocifrenih brojeva. (koristiti for)</p>

    <?php 
        function checkIf($array){
            $dvocifreni = 0;
            $trocifreni = 0;
            for($i=0;$i<count($array);$i++){
                if($array[$i] > 9 and $array[$i]<100){
                    $dvocifreni +=1;
                }if($array[$i]>99 and $array[$i]<1000){
                    $trocifreni +=1;
                }
                echo "broj: $array[$i]<br>";
            }if($dvocifreni > $trocifreni){
                echo "ima vise dvocifrenih: $dvocifreni";
            }else{
                echo "ima vise trocifrenih: $trocifreni";
            }
        }
        $array = [24,894,34,111,22,256,564];
        checkIf($array);
    ?>

</body>
</html>