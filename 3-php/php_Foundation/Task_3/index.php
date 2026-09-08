<?php

class Palindrome {

    public static function isPalindrome(string $word){
        $LowercaseWord = strtolower($word);
        $TrimedWord = str_ireplace(' ', '', $LowercaseWord);
        $ReveredWord = strrev($TrimedWord);

        if ($TrimedWord === $ReveredWord) {
            return true;
        }
        return false;
    }
}

if(Palindrome::isPalindrome('Never Odd Or Even')){
    echo 'Palindrome';
} else {
    echo 'Not palindrome';
}