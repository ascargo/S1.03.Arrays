<?php
$words = array ("Hello", "Elephant", "Here", "Eagle", "Egg", "Queen", "Pen", "Edge", "Eclipse");

function allWordsContainChar($words, $char):bool {
    foreach ($words as $word) {
        if (stripos($word, $char) === false) {
            return false;
        }
    }
    return true;
}

echo allWordsContainChar($words, "e") ? "true" : "false";
?>