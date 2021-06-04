<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .green {
            color:green;
        }
        .red {
            color:red;
        }
    </style>
</head>
<body>
    <p>Od niza zadatih reči, napraviti niz čiji će svaki element predstavljati span. Svaki span će imati klasu "crveni", "zeleni" u zavisnosti od toga da li je reč kraća ili duža od 5 slova. Prikazati dobijeni niz.</p>

    <?php
        $arr = ["telefon","televizor","lopta","more","pet","patika"];
        $x=[];
        for ($i=0;$i<count($arr);$i++){
            if(strlen($arr[$i])>5){
               $a = "<span class='green'>$arr[$i]</span>";
               array_unshift($x,$a);
               
            }else{
                $a = "<span class='red'>$arr[$i]</span>";
                array_unshift($x,$a);
            }
        }
        echo "A : ".join(",",$x)."<br>";
        
    ?>
</body>
</html>