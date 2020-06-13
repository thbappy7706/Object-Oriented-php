<?php


class  Home

{

    public $Father;
    public $Mother;
    public $Sister;


    //getter

    public function getF()
    {
        return $this->Father;

    }

    public function getM()
    {
        return $this->Mother;

    }

    public function getS()
    {
        return $this->Sister;

    }


    //setter

    public function setF($fat)
    {
         $this->Father=$fat;

    }
    public function setM($mot)
    {
        $this->Mother=$mot;

    }

    public function setS($sis)
    {
        $this->Sister=$sis;

    }



}


 $obj = new Home;

$obj->setF("Abdur Rahim");
$obj->setM("Khursida Pervin");
$obj->setS("Tanvin Jahan Rumpa");


echo $obj-> getF();
echo "<br/>";
echo $obj-> getM();
echo "<br/>";
echo $obj-> getS();