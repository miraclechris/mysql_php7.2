<?php

Class MyStaticClass
{ 
    public static $message = "Hi ";

    public static function getMessage(): string
    {
        return self::$message;
    }

    public static function helloSomeone(string $name): string
    {
        return self::getMessage() . $name . "<br/>";
    }

}

echo MyStaticClass::$message;
echo MyStaticClass::helloSomeone('Shirley');