<?php

//Single Dimension Array
//Index Array
$array_one = array("One",'two',"three");
$array_two = array("four",'five',6,7.5);

//Extracting Data from Arrays
//Travesing the Arrays
foreach ($array_one as $key => $one) {
    echo "$key => $one";
    echo "<br>";
}

//Array Push

echo "<pre>";
print_r($array_one);
print_r($array_two);
print_r("Hello");
print_r(array_push($array_one,"four"));
echo "</pre>";

echo"<pre>";
print_r($array_one);
echo"</pre>";

//Array Pop

echo "<pre>";
print_r($array_one);
print_r($array_two);
print_r("Hello");
print_r(array_pop($array_one));
echo "</pre>";

echo"<pre>";
print_r($array_one);
echo"</pre>";

// Array Merge

echo "<pre>";
print_r($array_one);
print_r($array_two);
print_r("Hello");
print_r(array_merge($array_one,$array_two));
echo "</pre>";

echo"<pre>";
print_r($array_one);
echo"</pre>";

//Array Flip

echo "<pre>";
print_r(array_flip($array_one));
echo "</pre>";

?>