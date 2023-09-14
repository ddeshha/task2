<?php


$numbers = [11, 100, 55, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function second_largest($numbers) {


    rsort($numbers);

    echo $numbers[1];

}

echo second_largest($numbers);