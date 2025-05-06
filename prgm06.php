<?php

function isGreater($a, $b) {
    if ($a > $b) {
        return "$a is greater than $b";
    } elseif ($a < $b) {
        return "$a is less than $b";
    } else {
        return "$a is equal to $b";
    }
}

echo isGreater(10, 20) . "<br>"; // Output: 10 is less than 20
echo isGreater(20, 10) . "<br>"; // Output: 20 is greater than 10
echo isGreater(10, 10) . "<br>"; // Output: 10 is equal to 10

?>