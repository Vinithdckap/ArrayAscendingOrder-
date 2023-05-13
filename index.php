<?php

// 1. Declare an array.
// 2. Declare an empty for storing the values.
// 3. Loop the first declared array.
// 4. Push the looped values to the empty array.
// 5. Print the empty array.


$inputs = [2,5,6];

$outputs=[];
for ($i=0; $i<count($inputs); $i++) { 

    if ($inputs[$i] < $inputs[$i + 1]) {  
        print_r($inputs[$i]);
        array_push($outputs,$inputs[$i + 1]);
    }
    // else{
    //     $a = $inputs;
    //     $inputs = $inputs[$i +1];
    //     $inputs[$i +1]=$a;
    // }
}
print_r($outputs); 

