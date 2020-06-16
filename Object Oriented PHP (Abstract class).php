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
<h1 style="text-align: center;color: maroon;font-weight: bold; font-family: 'Mongolian Baiti'"> Object Oriented PHP (Abstract class)</h1>
<br>
<?php

abstract  class Sports
{


    public function disp()
    {

        echo "Hi Tanvir Hossen Bappy";

    }



}


class Play extends Sports
{

    public $name="Cricket";
    public $country="Bangladesh";

   public function getD( )
    {


        if($this->name =="Cricket" && $this->country =="Bangladesh")
        echo "Welcome To Bangladesh Cricket Association";
        else
            echo  "The Information is Invalid";


    }




}




$obj=new Play;
echo $obj->disp();
echo "<br>";
echo $obj->getD();
//echo $obj->getD()







?>

</body>
</html>

