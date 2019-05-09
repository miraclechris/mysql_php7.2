<?php

declare(strict_types=1);

    function hello(){
        echo "Hello from Chris.";
    }

    function sum2(int $a, int $b): int
    {
        return $a + $b;
    }

 function funnyStyle(String $message, String $style): String
 {
     switch($style){
         case 'uppercase':
             return strtoupper($message);
          case 'lowercase':
              return strtolower($message);
          case 'funny':
              return applyFunnyStyle($message);
          default:
              return "I do not recognise that style?<br/>";
     }
 }

  function applyFunnyStyle(String $message): String
  {
      for ($i = 0; $i < strlen($message); $i++){
          if ($i % 2 == 0){
              $message[$i] = strtoupper($message[$i]);
          } else {
              $message[$i] = strtolower($message[$i]); 
          }
      }
      return $message;
  }

  echo funnyStyle("My name is still Christopher!!<br/>", 'uppercase');
  echo funnyStyle("My name is still Christopher!!<br/>", 'lowercase');
  echo funnyStyle("My name is still Christopher!!<br/>", 'funny');

$myFunnyFunction = 'funnyStyle';

echo $myFunnyFunction('My name is now a function?', 'funny');

