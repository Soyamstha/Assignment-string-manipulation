<?php
$string="   ABRACADABRA   ";
$nospace=trim($string);
$lowercase=strtolower($nospace);
$string1="abracadabra";
if (strcmp($lowercase,$string1)==0)
{
    echo "spell is correct";
}
else
{
    echo "wizarding world is still at risk!";
}
?>