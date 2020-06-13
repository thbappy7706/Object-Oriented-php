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
<h1 style="text-align: center;color: maroon;font-weight: bold; font-family: 'Mongolian Baiti'"> Object Oriented PHP (Pass Data to parent class from child class)</h1>
<br>
<?php

class Person
{
    public $name;
    public function __construct($name)
    {
        $this->name =$name;

    }

}

//$ob = new Person('Tanvir Hossen Bappy');
//echo $ob-> name;



class Test extends Person
{
public $age;
public function __construct($name,$age)

{
    $this->age =$age;
    parent::__construct($name);
}

}


$ob = new Test('Tanvir Hossen Bappy',22);

echo $ob->name;
echo "<br/>";
echo  $ob->age;

?>

</body>
</html>

