<?php

$strings = ["Hello", "World", "PHP", "Programming"];

$vowels = ["a","e","i","o","u"];

for($i = 0; $i < count($strings); $i++){
    $st = str_split(strtolower(trim($strings[$i])));
    $count = 0;
    //print_r($st);
    for($j = 0; $j < count($vowels); $j++){
        for($k = 0; $k < count($st); $k++){
            if($st[$k] == $vowels[$j]){
                $count++;
            }
        }
    }
    echo "Original String: " . $strings[$i] . ", Vowel Count: " . $count . ", Reversed String: " . strrev($strings[$i]) . "\n";
}