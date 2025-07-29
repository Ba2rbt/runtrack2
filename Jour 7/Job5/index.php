<?php
function occurrences($str, $char) {
    $count = 0;
    $length = strlen($str);
    
    for ($i = 0; $i < $length; $i++) {
        if ($str[$i] === $char) {
            $count++;
        }
    }
    
    return $count;
}

echo occurrences("Hello", "l");