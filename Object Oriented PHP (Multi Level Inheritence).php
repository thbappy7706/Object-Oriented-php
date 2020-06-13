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
<h1 style="text-align: center;color: maroon;font-weight: bold; font-family: 'Mongolian Baiti'"> Object Oriented PHP (Multi Level Inheritence)</h1>
<br>
<?php


class Father
{

    public $a;
    public $b;

    public function getV($x, $y)
    {
        $this->a = $x;
        $this->b = $y;

    }
}

class Son extends Father
{
public $c=50;

 public $sum;
 public function add()
 {
     return $this->sum =$this->a +$this->b+ $this->c;

 }

}
class Gson extends Son
{
    public function display()
    {
        echo "Value Of A is : $this->a <br>";
        echo "Value Of B is : $this->b <br>";
        echo "Value Of C is : $this->c <br>";
        echo "Value Of Total Sum is :". $this->add()  ;


    }


}


 $obj =new Gson;
$obj->getV(30,20);
$obj->add();
$obj->display();




?>

</body>
</html>

