<?php
/**
 * Purpose: The sum of all the multiples of 3 or 5 below 1000
 * Date: 4/03/16
 * Time: 20:59
 */

$sum = 0;

for ($number = 0; $number < 1000; $number++) {
    if (($number % 3 == 0) || ($number % 5 == 0)) {
        $sum += $number;
    }
}

echo $sum;