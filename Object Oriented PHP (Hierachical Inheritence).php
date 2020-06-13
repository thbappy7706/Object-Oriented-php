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
<h1 style="text-align: center;color: maroon;font-weight: bold; font-family: 'Mongolian Baiti'"> Object Oriented PHP (Hierachical Inheritence)</h1>
<br>
<?php

 class Math
 {
     public $a;
     public $b;
     public function getV($x,$y)
     {
         $this->a=$x;
         $this->b=$y;



     }

 }


 class Ad extends  Math
 {
     public $c=20;
     public $sum;


     public function add()
     {
      return $this->sum=    $this->a+$this->b+$this->c;
     }


     public function  disp()
     {
         echo "Value of A is : $this->a <br>";
         echo "Value of B is : $this->b <br>";
         echo "Value of C is : $this->c <br>";
         echo "Value of Addition is : " .$this->add(); echo "<br/>";

     }



 }

 class Ml extends Ad
 {

public  $Msum;
  public function mul()
  {
return $this->Msum = $this->a * $this->b * $this->c;
  }

 public function disp()
 {
      echo "Value of Multiplication is: ". $this->mul();
 }


 }


 $oba= new Ad;
 $oba->getV(5,6);
 $oba->disp();
 $obm = new Ml;
$obm->getV(5,6);
 $obm->disp();



?>

</body>
</html>

