<?php
// echo is used for showing the output
echo 'Hello World!!';
// br tag of html
echo '<br>';
// variables are declared by using $ symbol
// we don't need to declare the data type of the variable
// variable can start with _ , lower case, upper case
// but can't use special haracter in variable names
// and can't start with a number
$num = 30;
echo "number1 = ";
// variable needs $ sign to echo
echo $num;
echo '<br>';
// constant 
// it contains uppercases, which is a good practice
// but we can also use lowercases
// but can't use $ symbol at first
define('NUM', 40);
echo "number2 = ";
// constant does not need $ sign to echo
echo NUM;
echo '<br>';
// for string we can use "" or '' but not ``
$name = "Sabrina";
// we can concate a variable into another string
// but in concatanation must use ""
$th = "This is $name ";
// we can change the value of a variable any time
$name = "Sumona";
// we can also concate with . operator
echo $th.$name;
echo '<br>';
// data types in php : number & string
$half= 0.5;
$result= $half*2+2;
$val= "The result is : ".$result/2;
echo $val;
?>