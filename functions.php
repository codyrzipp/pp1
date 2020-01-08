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

//    foreach ($array as $number) {
//        $temp = $array[$number];
//
//        if ($temp >= $number) {
//            $temp = $number;
//        }
//        $
        echo "<p>Largest: $temp</p>";

}