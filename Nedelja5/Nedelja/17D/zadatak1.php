<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napisati funkciju koja prikazuje paragraf sa 2 spana unutra. Prvi span ima vase ime, drugi span vase prezime. Izracunati koliko ima slova u vasem imenu i prezimenu i zatim pozvati funkciju toliko puta. (primer: Ana Slovic - paragraf se prikazuje ukupno 9 puta)</p>

    <?php
        $ime = "Nikola";
        $duz_ime = strlen($ime);
        $prezime = "Prokopijevic";
        $duz_prezime = strlen($prezime);
    
        function paragrafi(){
            global $ime, $duz_ime, $prezime, $duz_prezime, $ime_prezime;
            $ime_prezime = "<p><span>$ime</span> <span>$prezime</span></p>";
            
        }
        
        $funkcija = paragrafi();
        for($i = 1; $i <= $duz_ime; $i++){
            echo $ime_prezime;
        }
        for($i = 1; $i <= $duz_prezime; $i++){
            echo $ime_prezime;
        }
    ?>
</body>
</html>