<?php
$string="find the hidden treasure at the golden island";
$w1 = "golden";
$w2="mystic";
$string = str_replace($w1, $w2, $string);
$final=strtoupper($string);
echo $final;
?>