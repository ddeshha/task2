<?php

        $names = ["Alice", "Bob", "Charlie", "Dave"];

        $names = ["Alice", "Charlie", "Dave"];  


        function find_name($names, $name) {

                    
            global $names;
            
            $search = array_search($name, $names);

            if (in_array( "Bob",  $names )) {
                echo "1";
            }else{
                return $search;
            }
            
        }
        echo find_name($names, "Bob");



