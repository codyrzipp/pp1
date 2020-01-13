<?php
function printArr($numbers) {
    foreach ($numbers as $number) {
        echo "<p>$number</p>";
    }
}
function largest ($array) {
    $temp = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ($temp < $array[$i]) {
            $temp = $array[$i];
        }
    }
        echo "<p>Largest: $temp</p>";
}

function removeDups ($numbers) {
    $result = array_unique($numbers);
//    var_dump($result);

    return($result);

}

function distribution($arr) {
   sort($arr);
    $uniqueArray = removeDups($arr);
    $associative = array();
//    var_dump($values);
    foreach ($uniqueArray as $value) {
        $associative[$value] = 0;
    }
    foreach ($arr as $value) {
        $associative[$value]++;
    }
    return $associative;

}
