<?php
$string="Gandalf,Aragorn,Legolas";
$arry=explode(",",$string);
$lowercase = array_map('strtolower', $arry);
$final =  implode("*", $lowercase);
echo $final;
?>