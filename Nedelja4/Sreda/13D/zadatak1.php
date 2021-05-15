<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin-left:0px;
            margin-right:0px;
            padding-top:30px;
        }
        body{
            font-size:50px;
            text-align:center;
        }
        .green{
            color:green;
        }
        .red{
            color:red;
        }
    </style>
</head>
<body>
    <div>
        <?php 
            $a = mt_rand(1,10);
            echo $a. "<br/>";
            $b = mt_rand(1,10);
            echo $b;
            
            if($a > $b){
                $c ="green";
            }else{
                $c ="red";
            }
        ?>
        <p  class="<?=$c?>"><?=$a?></p>
    </div>
    <hr style="height:5px; color:black; border:5px solid black; background-color:black; ">
    <div>
    <?php 
            $a = mt_rand(1,10);
            echo $a. "<br/>";
            $b = mt_rand(1,10);
            echo $b;
            
            if($a > $b){
                echo "<p style='color:green;'>$a</p>";
            }else{
                echo "<p style='color:red;'>$a</p>";
            }
        ?>
    </div>
</body>
</html>