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
<h1 style="text-align: center;color: maroon;font-weight: bold; font-family: 'Mongolian Baiti'"> Object Oriented PHP Part-4(Access Modifier)</h1>
<br>

<?php

class Test
{

    public $x =1000;
    public $y =1200;
    public $z =1300;
    private $m= 500;
protected $n=900;


    public function getM()
    {
        return $this->m;

    }

    public function getN()
    {

        return $this->n;

    }

}









//echo (new Test)->z;
//echo (new Test)->getM();


//$obj =new Test;

//echo $obj->getN();


?>



</body>
</html>

