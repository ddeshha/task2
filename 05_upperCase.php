<?php

$Array_of_names = ["eraasoft", "backend", "group313"];


$capitalized_names = array_map("capitalize_first_letter", $Array_of_names);


function capitalize_first_letter($name) {

    
    echo "<pre>";
    return ucfirst($name);
};

print_r($Array_of_names);


print_r($capitalized_names);

