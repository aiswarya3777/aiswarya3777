<?php
$string = 'Hello World';
echo strlen($string);//11 as output index number starts with 0
echo("<br>");
echo str_word_count($string);// to find no.of words .here it is 2
echo("<br>");
echo strrev($string);//to find reverse of a sentence
echo("<br>");
echo strpos($string,'World');//starting position of the World

//heredoc ,another form of string declaration
$a = <<< Demo
 Hello World 
 Demo;
 echo("<br>");
 echo $a;

 //new doc, another form of string declaration
 $b =<<< 'new'
 Hiii
 new;
 echo("<br>");
 echo $b;

 $number1 = '10';
 echo("<br>");
 echo(var_dump($number1));

 $number2 = 'Aiswarya';
 echo("<br>");
 echo(var_dump($number2));

echo isset($number2);//1 as output means true

//indexed array
$indexed_array = array('number1','number2','number3',1,2);
echo("<br>");
echo $indexed_array[0];
echo("<br>");
print_r($indexed_array);//to print array value

//associative array
//here data stored as key value pair
$mark = array('Aiswraya'=>20,'Najila'=>30);
echo("<br>");
print_r($mark);
echo("<br>");
echo $mark['Aiswraya'];

//multidimesional array

$student = array(
    array('Aiswarya',5,10),
    array('Sheena',6,11,20)
);
echo("<br>");
print_r($student);
echo("<br>");
echo $student[0][1];//[column no][row no]

echo("<br>");
// $type_casting = (string)20.999;
// $type_casting = (int)20.999;
$type_casting = 20.999;
var_dump($type_casting);
?>