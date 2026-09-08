<?php
class ItemOwners {

    public static function groupByOwners($ItemsArr) {
         $SecondArr = [];
        foreach ($ItemsArr as $Key => $value) {

            $SecondArr[$value][] = $Key;

        }

        return $SecondArr;
    }
}

$ItemsArr = array(
    "Baseball Bat" => "John",
    "Golf ball" => "Stan",
    "Tennis Racket" => "John",
    "Teepee"=> "Stan",
);

echo json_encode(ItemOwners::groupByOwners($ItemsArr));