<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>U klasu krevet dodati metodu "popust" koja za dati popust u procentima - i smanjuje cenu za toliko procenata.
    Napraviti novi objekat klase Krevet, zatim ga prikazati, pozvati popust za 10% i prikazati ga opet</p>
    <?php
        class Krevet{
            public $duzina, $sirina, $materijal;
            private $cena;
        
            public function __construct($duzina, $sirina, $materijal, $cena){
                $this->duzina = $duzina;
                $this->sirina = $sirina;
                $this ->materijal = $materijal;
                $this ->cena = $cena;
            }

            public function cena(){
                return "Cena ".$this->cena ;
            }

            function __toString()
            {
                return " Krevet je duzine: ".$this->duzina." i sirine: ".$this->sirina. " napravljen od : ".$this->materijal. " po ceni od ".$this->cena."eura <br>".$this->popust." eura sa popustom ";
            }

            function popust($cena, $nova_cena){
                $this->cena = $cena;
                $popust = $cena * (mt_rand(1,100) / 100);
                $this->nova_cena = $cena - $popust;
                return $this->nova_cena = $nova_cena;
            }
        }

        $krevet1= new Krevet("160cm","160cm","bukva",500);
        $krevet2= new Krevet("200cm","160cm","hrast",700);
        
        $krevet1 -> popust(200,20);
        echo $krevet1 -> popust(300,20) ;


        if($krevet1->cena() > $krevet2->cena()){
            echo $krevet1;
        }else{
            echo $krevet2;
        }

        // DRUGA  KLASA I ZADATAK 

        class Baldahin extends Krevet{
            public $visina, $cenaBaldahina;
            protected $cena;
            
            function __construct ($duzina, $sirina, $materijal,$cena,$visina,$cenaBaldahina)
            {
                parent::__construct($duzina, $sirina, $materijal, $cena);
                $this->visina = $visina;
                $this->cenaBaldahina= $cenaBaldahina;
                $this->cena = $cena;
                
            }
            function sa_baldahinom(){
                return $this->cena + $this->cenaBaldahina;
           
            }
            function __toString()
            {
                $nova_cena=$this->sa_baldahinom();
                return "Cena sa baldahinom je: ".$nova_cena;
            }
        }
        
        $baldahin = new Baldahin(200,100,"svila",200,100,250);
        echo $baldahin;
    ?>
</body>
</html>