<?php
    // задание 19
    $lines = file('test.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $sum = 0;
    foreach ($lines as $line) {
        $sum += (int) $line;
    }
    file_put_contents('sum.txt', $sum);

    // задание 3
    $files = ['1.txt', '2.txt', '3.txt'];
    $all_content = '';
    foreach($files as $file) {
        $content = file_get_contents($file);
        $all_content .= $content;
    }
    file_put_contents('new.txt', $all_content);

    //задание 7

    $file = 'test.txt';
    file_put_contents($file, '!', FILE_APPEND);

    // задание 18
    $file = 'text.txt';
    $lines = file($file, FILE_IGNORE_NEW_LINES);

    
    // заданеи 23
    file_put_contents('new.txt', '', );
?>

