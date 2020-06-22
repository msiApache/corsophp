<?php
/**OPERATORI DI ASSEGNAZIONE*/

$show = true;

if ($show) {
    $a = 5;
    $b = 8;

    $c = $a + $b;
    echo '5+8 = ' . $c;

    /**PRECENDEZA DELLE OPERAZIONI*/
    $c = $a + $b * 5; /*OUTPUT -> 45*/
    $c1 = ($a + $b) * 5;/*OUTPUT -> 65*/
    echo '</br>' . '5+8*5 = '.$c . '</br>' . '(5+8)*5 = '.$c1;

    /**MODULO DELLA DIVISIONE*/
    $f = 25 % 8;
    echo '</br>'. '25 % 8 = ' . $f;

}


