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
    <form action="odgovor2.php" method="GET" target="resenje">
        <label for="ime_i_prezime">Ime i Prezime</label><br/>
        <input type="text" name="ime_prezime"><br>
        <input type="submit" name="posalji">
    </form>
    <iframe name="resenje"></iframe>
</body>
</html>