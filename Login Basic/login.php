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


<h1 style="text-align: center;color: maroon;font-weight: bold; font-family: 'Mongolian Baiti'"> Object Oriented PHP (LOGIN SYSTEM)</h1>
<br>




<?php


echo "DB SAVED INFORMATION :<br>";
$dbUserName = "bappy@gmail.com";
$dbPassword =  "1223456";


echo $dbUserName;
echo "<br>";
echo $dbPassword;


echo "<hr>";


echo "USER INPUT INFORMATION :<br>";
$userinput=     $_REQUEST['username'];
$pwinput =      $_REQUEST['password'];




echo $userinput;
echo "<br>";
echo $pwinput;
echo "<hr>";


echo "Login Information:  <br>" ;
if ($dbUserName==  $userinput && $dbPassword==$pwinput)
{
    echo
  "
  <font color='#228b22'>
     Hey! Welcome to home....
</font>";
}
else
{
    echo
    "
  <font color='red'>
  Invalid Login!!!
</font>";

}








?>









</body>
</html>

