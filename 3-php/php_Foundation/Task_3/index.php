<?php

class Palindrome {

  static function isPalindrome(string $word){
     $LowercaseWord = strtolower($word);
    $TrimedWord = str_ireplace(' ', '', $LowercaseWord);
    $ReveredWord = strrev($TrimedWord);
    return $TrimedWord === $ReveredWord;
    }
}

if(Palindrome::isPalindrome('Never Odd Or Even')){
    echo 'Palindrome';
} else {
    echo 'Not palindrome';
}