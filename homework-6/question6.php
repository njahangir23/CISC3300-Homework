<?php

   $array1 = [
    'key1' => 'car',
    'key2' => 'plane',
    'key3' => 'train',
   ];

   foreach($array1 as $x => $y){
      echo"The key is $x, the value is $y <br>";
   }

   function hellouser(string $name, string $ending = '!') : string {
      return "Hello " . $name . $ending;
   }

   echo hellouser("John");