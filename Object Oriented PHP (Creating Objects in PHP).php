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

        <h3 style="text-align: center;color: maroon;font-weight: bold; font-family: 'Mongolian Baiti'"> Object Oriented PHP (Creating Objects in PHP)</h3>
        <br>

        <?php
class Name
{
    public $fullname = false;
    public $firstname = false;
    public  $surname =false;

    public  function get_N()
    {
        if($this->fullname!==false)
            return $this->fullname;
        if($this->firstname!==false && $this->surname!==false){

            return $this->firstname . ' ' . $this->surname;


        }
        return false;

    }


}

 $Bappy=new  Name;

$Bappy->fullname = "Tanvir Hossen Bappy";

//echo $Bappy->fullname;


echo "<br/>";


$sadia = new  Name;

$sadia->firstname = "Sadia Jamal";
$sadia->surname = "Misty";


print $Bappy->get_N(). "\n";
        echo "<br/>";
print $sadia->get_N(). "\n";




        ?>

    </section>




    <section class="footeroption">

        <h2>Conatact:tanvirbappy7706@gmail.com</h2>
    </section>



</div>

</body>
</html>