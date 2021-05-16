<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align:center;
            margin-top:200px;
        }
    </style>
</head>
<body>
    <form class="form" action="dva_inputa.php" method="GET" target="resenje">
        <input type="text" name="ime"><br/>
        <input type="text" name="prezime"><br/>   
        <input type="submit" name="posalji"><br/> 
    </form>
    <iframe class="iframe" name="resenje"></iframe>
</body>
</html>