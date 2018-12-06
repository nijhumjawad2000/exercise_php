<?php
//If you have and array $arr = [0,1,2,3,4]; How do you extract the third value?
$arr1 = array(0,1,2,3,4);
echo "Q1:$arr1[2]";

//If you have an array $arr = ["zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4]; How do you extract the third value?
echo "<br>";
$arr2 = ["zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4];
echo 'Q2:'.$arr2['two'];

//Create a new array with each comma-separated value as its own array element from the string $a = "a,b,c,d,e,f".
echo '<br>';
$a = ['a','b','c','d','e','f'];
echo 'Q3:';
var_dump($a);

//With the result array from 3, create a new array where each element is both key and value. In other words, the result should be: ["a"=>"a", "b"=>"b", "c"=>"c”,   "d"=>"d", "e"=>"e"]
echo '<br>';
$new_array = array_combine($a, $a);

$new_array = array();
foreach( $a as $element ) {
$new_array[ $element ] = $element;
}
echo "Q4 : ", var_dump( $new_array),"</br>";
//Find the sum of this array of numbers $arr = [0, 1, 2, 3, 4, 5, 6];
echo '<br>';
$arr3 = [0,1,2,3,4,5,6];
echo 'Q5:'.array_sum($arr3);
echo '<br>';
//Write a PHP function to find the maximum and minimum marks from the following set of arrays:
// $marks1 = [360,310,310,330,313,375,456,111,256];
// $marks2 = [350,340,356,330,321];
// $marks3 = [630,340,570,635,434,255,298];
$marks1 = [360,310,310,330,313,375,456,111,256];
$marks2 = [350,340,356,330,321];
$marks3 = [630,340,570,635,434,255,298];
echo'max:'.(max(array_merge($marks1,$marks2,$marks3))) . "<br>";
echo'min:'.(min(array_merge($marks1,$marks2,$marks3))) . "<br>";

//Write a PHP function to generate a string with 11 random letters and numbers
$numbers = range(1, 11);
shuffle($numbers);
foreach ($numbers as $number) {
echo "$number ";
}
echo '<br>';
$letters = range('a','k');
shuffle($letters);
foreach ($letters as $letter) {
echo "$letter ";
}
echo '<br>';
// Giving a sentence, write a PHP script that:
$sentence = 'my name iS nIjhum';
// Transform all characters to uppercase.
echo(strtoupper($sentence));
// Transform all characters to lowercase.
echo'<br>'. strtolower($sentence);
// Make the first character uppercase.
echo'<br>'. ucfirst($sentence);
// Make the first character of all the words uppercase.
echo'<br>'. ucwords($sentence);
echo '<br>';
// Write a PHP script to extract the file name from a path, in example:
$url = 'http://www.example.com/public_html/index.php';
echo "Q6.8 : ". basename($url);