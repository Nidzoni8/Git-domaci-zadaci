<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .article{
            width: 200px;
            display: inline-block;
            text-align:center;
        }       
        .div_img{
            width:200px;
            height:200px;
            margin-right:100px;
        }
        .stara{
            color:red;
        }
        .nova{
            color:green;
        }
    </style>
</head>
<body>

<?php

$huawei_img = "<img class='div_img' src='huaweip40pro.jpg' alt='huawei_img'>";
$huawei_header = "<h3 class='header'>Huawei P40 Pro 5G</h3>";
$xiaomi_img = "<img class='div_img' src='mi10tpro.jpg' alt='xiaomi_img'>";
$xiaomi_header = "<h3 class='header'>Xiaomi Mi 10T Pro 5G</h3>";
$samsung_img = "<img class='div_img' src='samsungs21ultra.jpg' alt='samsung_img'>";
$samsung_header = "<h3 class='header'>Samsung S21 Ultra</h3></h3>";

    function displayDiv($x, $y){
        $stara=mt_rand(500,700);
        $popust=mt_rand(0,20);
        if($popust > 0){
        $pojeftinjeno=$stara*($popust/100);
        $nova=ceil($stara-$pojeftinjeno);
        echo "<div class='article'>$x <br> $y <br> Cena: <span class='stara'>$stara</span>e <br>Cena sa popustom: <span class='nova'>$nova</span>e</div>"; 
        }else{
            echo "<div class='article'>$x <br> $y <br> Cena: <span class='stara'>$stara</span>e <br></div>";
        }
    }
?>
</body>
</html>