<?php
// strings functions are Built-in Functions
$str1 = "Tirth";
$str2 = "Patel";

echo $str1 . "  " .$str2;
echo "<br>";
print($str1 . "  " .$str2);

echo "<br>";
echo strlen($str1);

echo "<br>";
$trimstring = trim($str1);

echo "<br>";
echo strlen($trimstring);

echo "<br>";
echo strrev($str1);

echo "<br>";
echo strtolower($str1);

echo "<br>";
echo strtoupper($str1);

echo "<br>";
echo strcmp($str1, $str2);

echo "<br>";
echo strstr($str1, "t");

echo "<br>";
echo stristr($str1, "t");

echo "<br>";
echo ucfirst("i am student in MU");

echo "<br>";
echo ucwords("i am student in MU");


?>