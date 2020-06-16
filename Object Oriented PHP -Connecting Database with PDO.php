



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SQL INJECTION</title>
</head>
<body>
<h3 style="text-align: center;color: maroon;font-weight: bold; font-family: 'Mongolian Baiti'"> CONNECTING DB BY PDO</h3>
<hr>
<br>

<div style="text-align: center">

    <h2 > PDO DATABASE CONNECTION</h2>


    <?php

    //print_r(PDO::getAvailableDrivers());


    try {
        $dns= 'mysql:host =localhost; dbname=bappy';

        $pdo=  new PDO($dns, 'root','');
        echo 'Db is connected successfully';

    }
    catch (PDOException $e)
    {
        die($e->getMessage());

    }








    ?>



</div>


</body>
</html>


