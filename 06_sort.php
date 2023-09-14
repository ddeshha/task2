<?php
            
            $nums = [0,1,0,3,12];

            $zero = 0;

            echo "<pre>";

           
        for($i =0; $i < count($nums); $i++){

    
        if ($nums[$i] == 0) {

        $index = array_search($zero, $nums);

            array_splice($nums, $index,1);

            array_push($nums, $zero);

            }
        }
        print_r($nums); 