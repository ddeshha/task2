<?php

// $array = [ 1,10,5,2,11];

// echo min($array);

// echo "<br>";

// echo max($array);

################################################################

$array = [1,10,5,2,11];

$max = $array[0];   

foreach($array as $number){

    if($max < $number){

        $max = $number;

    }

}

echo "Largest number is: " . $max;
echo "<br>";

######################### END OF TEST #########################

$array = [1,10,5,2,11];

$min = $array[0];   

foreach($array as $number){

    if($min > $number){

     $min = $number;

    }

}

echo "Smallest number is:" . $min;
echo "<br>";

######################### END OF TEST #########################