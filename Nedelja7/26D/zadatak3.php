<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Preko filter fje napraviti niz od osoba cija je godina_staza najveca. (uputstvo, prvo izracunati max, pa onda filter)</p>

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
    // nisam najbolje razumeo sta se trazi u zadatku.
    ?>
</body>
</html>