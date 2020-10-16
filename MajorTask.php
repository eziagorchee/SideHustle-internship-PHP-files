<?php

    //**************** Declaration of Variables *********************

    $num1 = 80;
    $num2 = 45;
    $amount1 = 100;
    $amount2 = 60;
    





    /* 
        ==================

        ++++++++++++ Major Task For this Week Friday, 16th - Oct - 2020 +++++++++++++

         Arithemetic operations on different operators shown in the code below.

        

        ==================
    */

    //Addition
    echo "<h1>Addition</h1>";
    echo "<p>This program adds two variables together</p>";
    $add = $num1 + $num2;
    echo "The addition of num1 and num2 is ".$add;
    $add = $amount1 + $amount2;
    echo "<br>The addition of amount1 and amount2 is ".$add;
    



    //subtraction
    echo "<h1>Subtraction</h1>";
    echo "<p>This program subtract two variables from each other</p>";
    $minus = $num1 - $num2;
    echo "The Subtraction of num2 from num1 is ".$minus;
    $minus = $amount1 - $amount2;
    echo "<br>The Subtraction of amount2 from amount1 is ".$minus;



    //multiplication
    echo "<h1>Multiplication</h1>";
    echo "<p>This program multiply two variables together</p>";
    $times = $num1 * $num2;
    echo "The multiplication of num1 and num2 is ".$times;
    $times = $amount1 * $amount2;
    echo "<br>The multiplication of amount1 and amount2 is ".$times;


    //Division
    echo "<h1>Division</h1>";
    echo "<p>This program divides two variables</p>";
    $div = $num1 / $num2;
    echo "The division of num1 and num2 is ".$div;
    $div = $amount1 / $amount2;
    echo "<br>The division of amount1 and amount2 is ".$div;



    //Modulus
    echo "<h1>Modulus</h1>";
    echo "<p>This program divides two variables and return their remainder if there is any.</p>";
    $mod = $num1 % $num2;
    echo "The modulus of num1 and num2 is ".$mod;
    $mod = $amount1 % $amount2;
    echo "<br>The modulus of amount1 and amount2 is ".$mod;




?>