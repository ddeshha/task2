<?php

/**
 * 1
*/
        echo "<hr>";

        $numbers = [1, 2, 3, 4, 5];

        $fun_map = array_map(function($n) {

            return $n * 2;

        }, $numbers);

        echo "<pre>";

        var_dump($fun_map);

/**
 * 2
 */      

        echo "<hr>";

        $numbers = [1, 2, 3, 4, 5];

        $fun_fil = array_filter($numbers, function($n) {

            return $n % 2 == 0;

        });

        echo "<pre>";

        var_dump($fun_fil);


/**
 * 3
 */
    echo "<hr>";    

        $numbers = [1, 2, 3, 4, 5];
        $sum = array_reduce($numbers, function($carry, $n) {
            return $carry + $n;
        });

        var_dump($sum);

/**
 * 4
 */
        echo "<hr>";

        $numbers = [1, 2, 3, 4, 5];


        $squared = array_map(function($n) {

        return $n * $n;

        }, $numbers);
        var_dump($squared);