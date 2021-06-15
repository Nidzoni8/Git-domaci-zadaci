<?php 
    class WebSite {

        function header(){
            echo "<a href='index.php'>Dobro dosli u web-shop</a>";
        }

        function meni(){
            echo "<p>";
            echo "<ul>
                    <li><a href='index.php'>SVE</a></li><br/>
                    <li><a href='index.php?grupa=milka'>Milka</a></li><br/>
                    <li><a href='index.php?grupa=zelje'>Najlepse zelje</a></li><br/>
                    <li><a href='index.php?grupa=nestle'>Nestle</a></li><br/>
                </ul>";
            echo "</p>";
        }

        function footer(){
            echo "<br/>Bolje vas nasli";
        }
    }
    $ws = new WebSite ();

?>