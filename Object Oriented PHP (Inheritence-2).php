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
<h1 style="text-align: center;color: maroon;font-weight: bold; font-family: 'Mongolian Baiti'"> Object Oriented PHP (Inheritence-2)</h1>
<br>
<?php



class One
{
    public $a;
    public $b;

    public function getValue($x,$y)
    {
        $this->a=$x;
        $this->b=$y;

    }
}


class Two extends One
{
    public function display()
    {
        echo "Value of A is : $this->a <br>";
        echo "Value of B is : $this->b <br>";

    }

}


$obj=new Two;
$obj->getValue(7706,8084);
$obj->display();

?>

</body>
</html>

