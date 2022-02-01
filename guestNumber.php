<?php 

$isNumber = false;

echo "You need to find a number between 0 and 150 \n";

while (!$isNumber) {
    $response = readline("Enter a number:");

    if (ctype_digit($response)) {
        $isNumber = true;
        if ($response < 83) {
            echo "Your number is too small";
        } elseif ($response > 83) {
                echo "Your number is too large";
        } else {
            echo "Bravo, you have found the number";
        }
    } else {
        echo "You need to give a number ! \n";
    }
}
