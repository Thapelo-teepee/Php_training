<?php


function addAll($Array){
$secondArr = [];
$arrayCount = count($Array);

for($i = 1; $i <= $arrayCount; $i++) {
        $totalsum = array_sum($Array);
        $secondArr[] = $totalsum;
          array_shift($Array);
}

return array_sum($secondArr);
}
$Array = [1, 1, 1, 1, 1];

$ResultArray = addAll($Array);
 echo json_encode($ResultArray);

