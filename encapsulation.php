<?php

class class1{
    protected $num;
    function __construct(){
     $this->num=240;
    }

    function setnum(){
    $this->num=300;

    }
    function getnum()
    {
        return $this->num;
    }
}

$obj=new class1();
// echo $obj->num=90;
// echo $obj->setnum();
echo $obj->getnum();
