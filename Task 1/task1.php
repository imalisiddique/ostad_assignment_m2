<?php

function forLoop( $start, $end, $step ) {

    for ( $i = $start; $i <= $end; $i = $i + $step ) {

        $result = $i + 1;

        echo $result . "\n";

    }
}

forLoop( 1, 20, 2 );

echo "<br>";

function whileLoop( $start, $end, $step ) {

    $x = $start + 1;

    while ( $x <= $end ) {

        if ( $x % 2 == 0 ) {
            echo $x . "\n";
        }

        $x = $x + $step;
    }
}

whileLoop( 1, 20, 2 );

echo "<br>";

function doWhileLoop( $start, $end, $step ) {

    $y = $start + 1;

    do {

        if ( $y % 2 == 0 ) {
            echo $y . "\n";
        }
        $y = $y + $step;

    } while ( $y <= $end );
}

doWhileLoop( 1, 20, 2 );
