<?php

class MyClass
{
    public $message;

    public function __construct(string $message = 'Hello ')
    {
        $this->message = $message;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function helloSomeone(string $name): string
    {
        return $this->getMessage() . $name . "<br/>";
    }

}

$myObject = new MyClass("Hello there ");
echo $myObject->message;
echo $myObject->helloSomeone('Charlie');

$myObject = new MyClass("Hi ");
echo $myObject->message;
echo $myObject->helloSomeone('PHP :-)');