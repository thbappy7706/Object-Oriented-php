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

        <h3 style="text-align: center;color: maroon;font-weight: bold; font-family: 'Mongolian Baiti'"> Object Oriented PHP (Date)</h3>
        <br>

        <?php


        date_default_timezone_set('Asia/Dhaka');

        $nextweek = time()+(7*24*60*60);

        echo 'Now:      '.date('y-m-d');
        echo "<br/>";
        echo  'Next Week:  '.date('y-m-d',$nextweek)."\n";
        echo "<br/>";

        echo ("====================In OOP=========================================");    echo "<br/>";


        $now=new DateTime();
       $nextweek = new DateTime('today+ 1 week');

        echo 'Now  '.$now->format('y-m-d')."\n";
        echo "<br/>";
         echo  'Next Week: ' .$nextweek->format('y-m-d');








        ?>

    </section>




    <section class="footeroption">

        <h2>Conatact:tanvirbappy7706@gmail.com</h2>
    </section>



</div>

</body>
</html>