<?php

// 1-
$frutas = array( 'pera', 'uva', 'maca', 'banana', 'goiaba');

// 2-

$original = array( 'a', 'b', 'c', 'd', 'e' );
$inserted = array( 'x' ); // not necessarily an array, see manual quote

array_splice( $original, 3, 0, $inserted ); // splice in at position 3
// $original is now a b c x d e

// 3-
