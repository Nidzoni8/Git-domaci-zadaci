<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            text-align:center; 
            border:2px solid black;
            font-size:100px;
        }
        .row {
            border:2px solid black;
        }
        .data{
            border:2px solid black;
        }
    </style>
</head>
<body>
    <?php 
    $a = mt_rand(1,10);
    $a2 = $a ** 2;
    $b =  mt_rand(1,10);
    $b2 = $b ** 2;
    $c =  mt_rand(1,10);
    $c2 = $c ** 2;
    ?>
    <table>
        <tr class="row">
            <td class="data"><?=$a?></td>
            <td class="data"><?=$a2?></td>
        </tr>
        <tr class="row">
            <td class="data"><?=$b?></td>
            <td class="data"><?=$b2?></td>
        </tr>
        <tr class="row">
            <td class="data"><?=$c?></td>
            <td class="data"><?=$c2?></td>
        </tr>
    </table>
</body>
</html>