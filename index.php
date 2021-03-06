<?php
/**
 * Cody Zipp
 * 1/6/20
 * https://github.com/codyrzipp/pp1
 * Pair Program 1
 */
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

include ("functions.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 1.</title>
</head>
<body>
    <h1>Pair Program 1.</h1>
    <?php
        $numbers = [7, 9, 8, 9, 8, 8, 6];


        printArr($numbers);
        largest($numbers);
        echo"<p>No Dups: </p>";
        printArr(removeDups($numbers));
        echo"<p>Distribution: </p>";
        var_dump(distribution($numbers));
    ?>
</body>
</html>
