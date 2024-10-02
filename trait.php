<?php

class ParentClass {
    public function message() {
        echo "Parent Class";
    }
}

trait TraitA {
    public function message() {
        echo "TraitA";
    }
}

class MyClass extends ParentClass {
    use TraitA;
}

$obj = new MyClass();
$obj->message();