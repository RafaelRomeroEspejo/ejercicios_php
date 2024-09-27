<?php
      $num1= $_GET['num1'];
      $num2= $_GET['num2'];
      $num3= $_GET['num3'];

   if($num1 > $num2){
        if($num1> $num3){
            echo "$num1 es el mayor";
        }else{
            echo "$num3 es el mayor";
        }
    }else{
        if($num2>$num3){
            echo "$num2 es el mayor";
        }else{
            echo "$num3 es el mayor";
        }
    }
?>