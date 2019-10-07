<?php

function fizzbuzz($n){
for ($i = 1; $i <= $n; $i++) {
    if ($i % 15 == 0) {
        echo 'FizzBuzz ';
    } elseif ($i % 3 == 0) {
        echo 'Fizz ';
    } elseif ($i % 5 == 0) {
        echo 'Buzz ';
    } else {
        echo $i . ' ';
    }
}
}

fizzbuzz(100);
?> 