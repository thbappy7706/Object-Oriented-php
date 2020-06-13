<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP</title>
    <link rel="stylesheet" href="">
    <style>
        .phpcoding{width: 900px; margin: 0 auto; background:#ddd;min-height: 500px}
        .headeroption, .footeroption{background: #003d66; color: #fff;text-align: center; padding: 15px;}
        .headeroption h2, .footeroption h2{margin: 0}
        .wrpart{min-height: 500px}


    </style>
</head>
<body>
<div class="phpcoding" >
    <section class="headeroption">

        <h2>PHP OOP Concept By Tanvir Hossen Bappy </h2>
    </section>

    <section class="wrpart">

        <h3 style="text-align: center;color: maroon;font-weight: bold; font-family: 'Mongolian Baiti'"> Object Oriented PHP Part-05 (Class Constant)</h3>
<br>

        <?php


class Test
{

    private const Name= "Tanvir Hossen Bappy";
protected const Id = 7706;

    public function myName()
    {
        return self::Name;

    }


}


class Test2 extends Test{
    public function myId()
    {
        return self::Id;

    }

}


 $obj=new Test2;

echo Test2::myID();

echo "<br/>";
//echo Test::Name;

$obj=new Test;


echo Test::myName();











        ?>

    </section>




    <section class="footeroption">

        <h2>Conatact:tanvirbappy7706@gmail.com</h2>
    </section>



</div>

</body>
</html>