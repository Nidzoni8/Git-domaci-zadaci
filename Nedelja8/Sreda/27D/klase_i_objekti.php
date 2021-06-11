<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <P>Napraviti klasu Krevet, koja ima clanice: duzina, sirina, materijal i cena. Cena je private. 
    Napisati konstruktor koji dobija i  postavlja sve clanice.
    Napisati metodu za citanje cene.
    Napisati metodu __toString koja prikazuje: "Krevet je duzine... i sirine.... napravljen od.... po ceni ...."
    2. Napraviti dva objekta klase Krevet, sa podacima po zelji. Prikazati samo Krevet sa vecom cenom.
    3.U klasu krevet dodati metodu "popust" koja za dati popust u procentima - i smanjuje cenu za toliko procenata.
    Napraviti novi objekat klase Krevet, zatim ga prikazati, pozvati popust za 10% i prikazati ga opet.
    </P>

    <?php
        class Krevet{
            public $duzina, $sirina, $materijal;
            private $cena, $popust;

            function __construct($duzina, $sirina, $materijal, $cena){
                $this->duzina = $duzina;
                $this->sirina = $sirina;
                $this->materijal = $materijal;
                $this->cena = $cena;
            }
            function __toString(){
                return "Krevet je duzine ".$this->duzina."cm i sirine ".$this->sirina."cm, napravljen od ".$this->materijal." po ceni od ".$this->cena."  eura.<br>";
            }
            function cena($cena){
                return $this->cena = $cena;
            }
            function popust($cena, $nova_cena){
                $this->cena = $cena;
                $popust = $cena * (mt_rand(1,100) / 100);
                $this->nova_cena = $cena - $popust;
                return $this->nova_cena = $nova_cena;
            }
        }
        $krevet1 = new Krevet(200, 150, 'kuvanog oraha', mt_rand(100,500));
        $krevet2 = new Krevet(150, 100, 'trske', mt_rand(100,500));
        if($krevet1->cena(mt_rand(100,500)) > $krevet2->cena(mt_rand(100,500))){
            echo $krevet1;
        }else{
            echo $krevet2;
        }
        $krevet3 = new Krevet(300, 200, 'bambusa', 200);
        $krevet3->popust(200,mt_rand(1,100));
        echo $krevet3;

        
        
    ?>
</body>
</html>