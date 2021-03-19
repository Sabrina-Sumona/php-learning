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
echo '<br>';
// array using []
$arr = ['Sabrina', 'Naorin', 'Sumona'];
// cant echo the array at once as echo print a string at a time
// echo arr;
// we can use print_r() to print the array at once
print_r($arr);
echo '<br>';
// but we can print any index value by using echo
echo $arr[0];
echo '<br>';
echo $arr[2];
echo '<br>';
// another way to declare array
$arr1 = array('Minu', 'Tinu', 'Tushi');
print_r($arr1[2]);
echo '<br>';
// key of index declaration of array
$arr2 = array('1st'=>'Minu', '2nd'=>'Tinu', '3rd'=>'Tushi');
print_r($arr2['1st']);
echo '<br>';
$arr3= ['1st'=>'Sabrina', '2nd'=>'Naorin', '3rd'=>'Sumona'];
print_r($arr3);
echo '<br>';
echo $arr3['1st'];
echo '<br>';
echo $arr3['2nd'];
echo '<br>';
echo $arr3['3rd'];
echo '<br>';
// we can update an array value
$arr3['3rd'] = 'Sumu';
print_r($arr3['3rd']);
echo '<br>';
print_r($arr3);
echo '<br>';
// for loop 
for($i=0; $i<=10; $i++){
    echo "1 * $i = ".$i."<br>";
}
echo "For Loop closed.";
echo '<br>';
// while loop
$i=0;
$number= ['8', '9', '2', '4', '7'];
// count() counts the no. of the array
while($i<=2*count($number)){ 
    echo "1 * $i = ".$i."<br>";
    $i++;
}
echo "While Loop closed.";
echo '<br>';
// for each loop
// this loop traverse a array for each index
// it's does not require any loop control variable
$fruits= ['mango', 'banana', 'apple', 'Lichi'];
foreach($fruits as $fruit){
    echo $fruit.'<br>';
}
echo "For each Loop closed.<br>";
$relatives= ['Father'=>'Muslem', 'Mother'=>'Rumisa', 'Sister'=>'Rumana', 'Brother'=>'Maruf'];
foreach($relatives as $key=> $val){
    echo $key.'\'s name is '.$val.'<br>';
}
echo "For each Loop closed.";
echo '<br>';
?>