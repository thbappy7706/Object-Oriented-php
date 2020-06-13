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
<h1 style="text-align: center;color: maroon;font-weight: bold; font-family: 'Mongolian Baiti'"> Object Oriented PHP Part-02 ($this Keyword)</h1>
<br>

<?php

class Student
{

    public $name;
    public $age;
    public $cgpa;



    //getter method
    public function getName()
    {
        return $this->name;

    }
public function getAge()
{
    return $this->age;



}
public function getCgpa()
{
    return $this->cgpa;

}


//setter method


public function setName($name)
{
    $this->name=$name;


}

public  function setAge($age)
{

    $this->age=$age;

}


public function setCgpa($cgpa)
{
    $this->cgpa=$cgpa;

}


}


//creating an object
$student1= new Student;

$student1->setName("Tanvir Hossen Bappy");
$student1->setAge(24);
$student1->setCgpa(3.40);

echo $student1-> getName();
echo "<br/>";
echo $student1-> getAge();
echo "<br/>";
echo $student1-> getCgpa();
echo "<br/>";








?>

</body>
</html>

