<?php
//Task 1: String Manipulation

function modifyText($text) {
    $lowercaseText = strtolower($text);
    
    $modifiedText = str_replace("brown", "red", $lowercaseText);
    
    echo $modifiedText;
}

$text = "The quick brown fox jumps over the lazy dog.";

modifyText($text);