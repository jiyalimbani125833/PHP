<?php
//Strings Functions are Built-in Functions
//Inverstigating Strings
//Manipulating Strings
$str1 = "Jiya";
$str2 = "Limbani";

echo $str1 . " " .$str2;
echo "<br>";
print($str1 . " " .$str2);

echo "<br>";
echo strlen($str1);

echo "<br>";
$trimString = trim($str1);

echo "<br>";
echo strlen($trimString);

echo "<br>";
echo strrev($str1);

echo "<br>";
echo strtolower($str1);

echo "<br>";
echo strtoupper($str1);

echo "<br>";
echo strcmp($str1,$str2);

echo "<br>";
echo strcmp("Hello","Hello");

echo "<br>";
echo strcmp("hello","Hello");

echo "<br>";
echo strstr($str1,"y");

echo "<br>";
echo stristr($str1,"y");

echo "<br>";
echo ucfirst("i am student in MU");

echo "<br>";
echo ucwords("i am student in MU");



?>