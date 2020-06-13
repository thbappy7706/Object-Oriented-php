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
<h1 style="text-align: center;color: maroon;font-weight: bold; font-family: 'Mongolian Baiti'"> Object Oriented PHP Part-3(Inheritence)</h1>
<br>

<?php

class ParentClass{

   public $fathername =" Abdur Rahim";
   public $mothername ="Khursheda Parvin";


   public function MainIn()
   {

       return "Wellcome to Tanvir Hossen Bappys Family";

   }

}



class ChildClass extends ParentClass
{

    public $sonname= "Tanvir Hossen Bappy";


}

//echo (new ChildClass)->fathername;


$object = new ChildClass;

echo $object->MainIn();






?>



</body>
</html>

