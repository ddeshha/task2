<?php

// $array = [1,10,5,2,11];

// $x = 3 ;

// for($i = 0; $i < 5; $i++){

//     if($array[$i] > $x){

//     echo $array[$i];
    
//     echo "<br>";
       
//     }
    
//     elseif($array[$i] < $x){
//         echo "<br>";

//         echo $array[$i];

//         echo "<br>";
//     };
// };


################################################################




            // $array = [1,10,5,2,11];

            // $x = 3 ;

            // for($i = 0; $i < count($array); $i++){

            // if($array[$i] < $x){
                
            // echo "Numbers Smaller than (3) = \n" ;

            // echo $array[$i];



            // echo "<br>";

            // };


            // for ($i=0; $i <count($array) ; $i++) { 


            // if($array[$i] > $x){

            // echo "Numbers Greater  than (3) =\n ";

            // echo $array[$i];

            // };

            // echo "<br>";

            // };
            // };
            
################################################################

            function count_numbers($array, $x) {

                $smaller = 0;

                $greater = 0;

                foreach ($array as $num) {

                    if ($num < $x) {

                        $smaller += 1;

                    } elseif ($num > $x) {

                        $greater += 1;

                    }
                }
                return array($smaller, $greater);
            } 
            $array = array(1, 10, 5, 2, 11);

            $x = 3;

            list($smaller, $greater) = count_numbers($array, $x);

            echo "Numbers Smaller than ($x) = $smaller\n";

            echo "Numbers Greater then ($x) = $greater\n";