<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Object Oriented PHP (Creating Objects in PHP)</title>
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

        <h3 style="text-align: center;color: maroon;font-weight: bold; font-family: 'Mongolian Baiti'"> Object Oriented PHP ( Static====== PHP)</h3>
        <br>

        <?php

        class Cars
        {

            public static $name = "TOYOTA-ALIEN";
            public static  $color = "Black";
            public  static $model_year= "2019";
            public  static  $price = 2800000;


            public function Model()
            {
                Cars::$name;
                Cars::$color;
                Cars::$model_year;
                Cars::$price;


            }
        }

      echo Cars::$name;
        echo "<br/>";
       echo Cars::$color;
        echo "<br/>";
        echo Cars::$model_year;
        echo "<br/>";
        echo Cars::$price;
        echo "<br/>";
        ?>

    </section>




    <section class="footeroption">

        <h2>Conatact:tanvirbappy7706@gmail.com</h2>
    </section>



</div>

</body>
</html>