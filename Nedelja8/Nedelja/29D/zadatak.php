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
    //prvi zadatak

    class SastojakHrane {
        public $naziv, $mera, $kalorije;

        public function __construct($naziv, $mera, $kalorije){
            $this->naziv = $naziv;
            $this->mera = $mera;
            $this->kalorije = $kalorije;
        }

        public function promeni_meru($menjaMeru){
            $this->mera = $menjaMeru;
        }

        public function prikazi(){
            echo "<p> Naziv: $this->naziv <br /> Mera: $this->mera <br /> Kalorije: $this->kalorije";
        }
    }

    //drugi zadatak

    include "podaci.php";

    class Jelo {
        public $naslov, $opis, $s_hrane;

        function __construct($naslov, $opis, $podaci){
            $this->naslov = $naslov;
            $this->opis = $opis;
            $this->s_hrane = [];

            for($i=0; $i<count($podaci); $i++){
                $sastojak  = new SastojakHrane( $podaci[$i]['naziv'], $podaci[$i]['mera'], $podaci[$i]['kalorije']);
                array_push($this->s_hrane, $sastojak);
            }
        }

        function prikazi1(){
            echo "<p>";
            echo "Naslov: $this->naslov";
            echo "<br />";
            echo "Opis: $this->opis";
            echo "<br />";
            echo "Sastojci: ";
            for($i = 0; $i <count($this->s_hrane);$i++) {
                $this->s_hrane[$i]->prikazi();
            }
            echo "</p>";
        }
        function promeni_meru1( $naziv, $nmera){
            for($i=0;$i<count($this->s_hrane);$i++){
                if($this->s_hrane[$i]->naziv == $naziv)
                    $this->s_hrane[$i]->mera = $nmera;
            }
        }
    }
    $jelo = new Jelo("Palačinke", "najbolje jelo ikad", $podaci);
    $jelo->prikazi1();
    echo "<br>";
    $jelo->promeni_meru1("secer", "20g");
    $jelo->prikazi1();

    
?>
</body>
</html>