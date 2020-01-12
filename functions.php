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
    echo"<p>No Dups: </p>";
    var_dump($result);

}