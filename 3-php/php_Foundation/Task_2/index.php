<?php


function fibonacci($n) {
     if($n <= 0) {
        return [0];
     };
     if($n == 1) {
        return [0];
    }

    $Sequence = [0, 1];

    for ($i = 2; $i < $n; $i++) {
        $FirstIndex = $Sequence[$i - 1];
        $SecondIndex = $Sequence[$i - 2];
        $Sequence[] =  $FirstIndex + $SecondIndex;
    }

    return $Sequence;
}



$Fibos = fibonacci($_POST["number"]);


require "index.view.php";