<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>1. Dodati u gornji niz jos 4 osobe po zelji.</p>
    <p>2. Napisati fju koja prikazuje imena svih programera.</p>
    <p>3. Napisati fju koja prikazuje sve podatke neke date osobe. Pozivajuci tu funkciju prikazati sve osobe cije ime sadrzi slovo s.</p>

    <?php
        $x = [ 
            ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
            ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
            ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
            ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
           ];
           print_r($x);

           
        $niz = [
            ['ime'=>"Petar", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
            ['ime'=>"Milan", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
            ['ime'=>"Dejan", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
            ['ime'=>"Slavisa", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
        ];
        $new = array_merge($x, $niz);
        echo "<br>";

        function showPosition($new){
            foreach($new as $osoba){
                if($osoba['pozicija'] == "programer"){
                    echo  $osoba['ime'];
                }
            }
        }
        echo "<pre>";
        showPosition($new);
        echo "</pre><br>";
        
        function allNames_S($new){
            foreach($new as $osoba){
                if($osoba['ime'][0]=="S"){
                echo "<p>";
                foreach($osoba as $ind=>$el)
                    echo "<span>$ind=$el</span>, ";
                echo "</p>";
                }
            }
        }
        allNames_S($new);
    ?>
</body>
</html>