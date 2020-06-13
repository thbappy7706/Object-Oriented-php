<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1 style="text-align: center;color: maroon;font-weight: bold; font-family: 'Mongolian Baiti'"> Object Oriented PHP (Preventing Method Overloading)</h1>
<br>
<?php

class One
{
    public $x=10;
    public $y=20;
    public final function getV()
    {
        return $this->x+$this->y;

    }

}

class Two extends One
{
    public final function disp()
    {

        echo "Value of total is :".$this->getV();
    }

}


  $oba=  new Two;
echo $oba->disp();



?>

</body>
</html>

