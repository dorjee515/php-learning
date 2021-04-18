<?php
$str1="hello";
$str2="world wa ad";
echo "length of the string is ";
echo strlen($str1); //length of string 
echo "<br>";

//concating the string in between
echo "the length of this string is ". str_word_count($str2) ." .ok bye <br>";
echo "reverse of the string";
echo $str1;
echo " is <br>";
echo strrev($str1);  
//searching
echo "<br>the search for wa in this string". strpos($str2,"wa"). " ok bye";
echo "<br>the search for wa in this string". str_replace("wa","is",$str2). " ok bye";

?>