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


/*
public - Access from anywhere
private- only accesss from own class
protected - access from own class and subclass

*/

<?php

class Test{

    public $x =200;
    protected $y =400;
    public $z =600;

    private $bp =90;

    protected $xc =5235;


   // public function getBp()
         private function getBp()
    {

        return $this->bp;

    }


    public function gettt()
    {

        return $this->getBp();

    }

}


class CTest extends Test
{

  public function getX()
  {

      return $this->xc;
  }
  public function getY()
  {
      return $this->y;

  }

}


$obj=new CTest;
echo $obj->getX();
echo "<br/>";


echo (new CTest)->getY();

//echo (new Test)->z;

/*
$ob=new Test;
echo $ob->gettt();
echo  "<br/>";

$ob->x=412414;    //modifying x
echo $ob->x;

*/

?>

</body>
</html>

