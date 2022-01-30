<?php 

$word = readline("Enter a word :");
$reverse = strtolower(strrev($word));

if (strtolower($word) === $reverse) {
    echo("This word is a palindrome");
} else {
    echo("This word is not a palindrome");
}


/* other version, more precise

while(true) {
    $word = strtolower(readline("Enter a word : "));

    if ($word === "end") {
        exit("Programme's end");
    }
    $reverse = strtolower(strrev($word));
    if (strtolower($word) === $reverse) {
        exit("Bravo, this word is a palindrome !");
    } else {
        echo "This word is not a palindrome \n";
    }
}
*/
