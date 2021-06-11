<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Preko usort fje sortirati niz po godinama_staza (*dodatak - neobavezno, ako su godine iste pri uporedjivanju, neka prva bude starija osoba)</p>


    <?php
         $x = [ 
            ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
            ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
            ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
            ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
           ];
        
        $x = array_map(function($osoba){
            $osoba['godine_staza']=mt_rand(1,3);
            return $osoba;
        },$x);
        usort($x, function($a, $b){
            if($a['godine_staza'] > $b['godine_staza'])
                return -1;
            else    
                return 1;
        });
        echo"<pre>";
        print_r($x);
        echo "</pre>";
    
    
    ?>
</body>
</html>