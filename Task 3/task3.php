<?php

$veryOld = 0;
$old = 1;
$new = 1;

for ( $i = 1; $i <= 10; $i++ ) {

    echo $veryOld . "\n";

    $old = $new;
    $new = $old + $veryOld;
    $veryOld = $old;

    if ( $veryOld > 100 ) {
        break;
    }

}