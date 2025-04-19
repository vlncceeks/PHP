<?php
    // ЗАДАНИЕ 1
    $array = ['a', 'b', 'c', 'b', 'a'];
    $result = array_count_values($array);
    
    print_r($result);

    // ЗАДАНИЕ 16
    $array = [1, 2, 3, 4, 5, 6, 7, 8];
    $result = '';

    while (!empty($array)) {
        $result .= array_shift($array);
        
        if (!empty($array)) {
            $result .= array_pop($array);
        }
    }

    echo $result; 

    // ЗАДАНИЕ 20
    $array = [1, 2, 3, 4, 5];
    array_splice($array, 1, 2);
    print_r($array); 

    // ЗАДАНИЕ 30
    $array = [1, 2, 4];
    
    echo var_export(in_array(3, $array));

    // ЗАДАНИЕ 40
    $array = [1, 2, 3, 4, 5];
    $result = 0;
    foreach($array as $value) {
        $result += $value**2;
    }
    echo $result;
?>