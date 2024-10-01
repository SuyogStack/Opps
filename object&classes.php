<?php

class student{
    #properties
    public $name= "suyog";

    #method or member function
    public function create(){
        return "Hello"
    }
}

#object creation
$obj = new student;
echo $obj->$name;
echo $obj->create();
