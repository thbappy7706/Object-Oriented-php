
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Syntax</title>
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


        <?php


        //   echo "Hi TANAVIR HOSSEN";





        class Person{

            /*properties
            method
            setter,getter ,magic method*/


            //Now Properties

            public $name = "Bappy";
            public $age = 24;
            public $dept = "CSE";

            public function MyFullName(){

                return " Hello,Tanvir Hossen Bappy";

            }

            public function Id($sid){

                return "My Id is " . $sid;
            }

        }


        $obj1 = new Person;

        //echo $obj1->name;
        //echo $obj1->MyFullName();
        echo $obj1->Id('162-15-7706');










        ?>

    </section>




    <section class="footeroption">

        <h2>Conatact:tanvirbappy7706@gmail.com</h2>
    </section>



</div>

</body>
</html>

