<?php
$str ="This  ";
echo $str."<br>";
$lenn = strlen($str);
echo "This length of string is ".$lenn. " . Thanku you <br>" ; 
echo "The number of words in this string is ".str_word_count ($str). ". Thanku you <br>" ; 
echo "The replaced string is ".str_replace ("is","at",$str ).". Thanku you <br>";
echo "The  reversed string is ".strrev($str ).". Thanku you <br>";
echo "The search for is in this string is ".strpos ($str, "is" ).". Thanku you <br>";


?>