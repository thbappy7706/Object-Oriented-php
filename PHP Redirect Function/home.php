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


<h1 style="text-align: center;color: maroon;font-weight: bold; font-family: 'Mongolian Baiti'"> Object Oriented PHP (Redirect Function ,Data Send With URL)</h1>
<br>



<?php

$user   = $_REQUEST['username'];
$pass   = $_REQUEST['password'];


if($user=="google")
{
    header("location:https://www.google.com");


}

elseif ($user=="facebook")
{


    header("location:https://www.facebook.com");
}

elseif ($user=="showme" && $pass=12345)
{

    header("location: show.php? test=$user  ");
//    header("location: show.php? testp =$pass");

}
else
{

    echo "You Did not redirect";
}






















?>

</body>
</html>

