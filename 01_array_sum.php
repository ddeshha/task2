<?php
            //     function randNumbers(){
            //     for ($i=0; $i <=50 ; $i++) { 

                     
            //         echo $i++;

            //         echo "<br>";  

            //         $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

            //         $randomKeys = array_rand($numbers, 2);

            //         echo $numbers[$randomKeys[0]] . "\n";
            //         echo $numbers[$randomKeys[1]] . "\n";
            //     }
            // }; 
            
            //         randNumbers();  

            

   /**
    * simple answer 
    */


    // $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    
    // $randomKeys = array_rand($numbers, 2);

    // echo $numbers[$randomKeys[0]] . "\n";
    // echo $numbers[$randomKeys[1]] . "\n";


    /**
     * another answer
     */


     $emptyArray = [];

     for ($i=0; $i < 50 ; $i++) { 


       $fullArray = print_r(array_push($emptyArray, $i++));


       echo "<br>";

     };

     $randomNumbers = array_rand($fullArray, 2);

     echo $emptyArray[$fullArray[0] . "\n"];
     echo $emptyArray[$fullArray[1] . "\n"];


        // echo"<pre>";
        // print_r($emptyArray);
        // echo"</pre>";

    
?>
