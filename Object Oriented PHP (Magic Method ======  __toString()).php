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
<h1 style="text-align: center;color: maroon;font-weight: bold; font-family: 'Mongolian Baiti'"> Object Oriented PHP (Magic Method ======  __toString())</h1>
<br>

<?php



 class Student
{

    protected $name;
    protected $age;

    public function getN()
    {
        return $this->name;

    }


     public function getA()
     {
         return $this->age;

     }

     private function setN($name)
     {
         $this->name=$name;

     }

     private function setA($age)
     {
         $this->age=$age;

     }

     function __construct($name,$age)
     {
         $this->setN($name);
         $this->setA($age);

     }

     function __toString()
     {

         return "Hello  ". $this->getN() . "  Your Age is  " .   $this->getA();



     }


 }

$ob= new Student('Sadia',22);

 echo $ob;

?>

</body>
</html>

