<?php
    $a1 = 1;
    $b1 = 3;
    $c1 = 2;
    $a2 = 9;
    $b2 = 2;
    $c2 = 7;

    $m = $a1 * $b2 - $b1 * $a2;

    $m1  = $c1 * $b2 - $b1 * $c2;
    $m2 = $a1 * $c2 - $c1 * $a2;

    $x1 = $m1 / $m;
    $x2 = $m2 / $m;

    echo ('x1 = $x1, x2 = $x2');
?>
