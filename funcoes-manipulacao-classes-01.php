<?php 

class MyClass 
{
    public $name;
    private $id;
    protected $lastname;

    public function method1() 
    {
        
    }
    protected function method2() 
    {

    }
    private function method3() 
    {

    }
}

$obj = new MyClass;

/* $methods = get_class_methods($obj);
var_dump($methods); */

/* $vars = get_class_vars('MyClass');
var_dump($vars); */

/* $vars = get_object_vars($obj);
var_dump($vars); */

var_dump(get_class($obj));
