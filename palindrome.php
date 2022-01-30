<?php 

$mot = readline("Enter a word :");
$reverse = strtolower(strrev($mot));

if (strtolower($mot) === $reverse) {
    echo("This word is a palindrome");
} else {
    echo("This word is not a palindrome");
}


/* other version, more precise

while(true) {
    $mot = strtolower(readline("Enter a word : "));

    if ($mot === "end") {
        exit("Programme's end");
    }
    $reverse = strtolower(strrev($mot));
    if (strtolower($mot) === $reverse) {
        exit("Bravo, this word is a palindrome !");
    } else {
        echo "This word is not a palindrome \n";
    }
}
*/