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
        function read_from_form(){
            $a = $_GET['niz'];
            $niz = explode(" ",$a);
            echo "Niz je".join(" ",$niz)."<br>";
            return $niz;
        }

        function even_numbers($a){
            $even = 0;
            $k = count($a);
            for ($i=0;$i<count($a) ;$i++){
                if ($a[$i] % 2 == 0 ){
                    $even+=1;
                }
                if($even >=3){
                    echo "Ima 3 ili vise parna broja<br> ";
                    return true;
                }
            }
        }
        
        function checks_if_exist($array1){
            for($i=0;$i<count($array1);$i++){
                if($array1[$i]>1000){
                    echo "ima broj veci od 1000";
                    return true;
                }
            }
        }
        $niz = read_from_form();
        even_numbers($niz);
        checks_if_exist($niz);
    ?>
</body>
</html>