<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napisati fju koja za zadata dva imena (globalne promenljive) ispisuje duze ime.</p>

    <?php
        $duze_ime = "Duze ime";
        $krace_ime = "Krace ime";

        function poziva_ime(){
            global $duze_ime, $krace_ime;
            if($duze_ime > $krace_ime){
                echo $duze_ime;
            }else{
                echo $krace_ime;
            }
        }
    $funkcija = poziva_ime();
    echo "$funkcija";
    ?>
</body>
</html>