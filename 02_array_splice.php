<?php

$newArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$splice2 = array_splice($newArray, 5);

$splice1 = array_splice($newArray, 0);


echo "<pre>";
print_r($splice1);
print_r($splice2);
echo "</pre>";

########################################################################

