<?php
/**OPERATORI DI ASSEGNAZIONE*/

$show = false;

if ($show) {
    $a = 5;
    $b = 8;

    $c = $a + $b;
    echo '5+8 = ' . $c;

    /**PRECENDEZA DELLE OPERAZIONI*/
    $c = $a + $b * 5; /*OUTPUT -> 45*/
    $c1 = ($a + $b) * 5;/*OUTPUT -> 65*/
    echo '<br>' . '5+8*5 = ' . $c . '<br>' . '(5+8)*5 = ' . $c1;

    /**MODULO DELLA DIVISIONE*/
    $f = 25 % 8;
    echo '<br>' . '25 % 8 = ' . $f;

    /**CALCOLO DELLE POTENZE*/
    $q = 2 ** 4;
    echo '<br>2 **4 = ' . $q;

    /**UGUAGLIANZE E CONFRONTI PER TIPO E UGUAGLIANZE*/
    $a = '1';
    $b = 1;
    $c = $a == $b;
    $d = $a === $b;
    echo '<br>$a = ';
    var_dump($a);
    echo '<br>$b = ';
    var_dump($b);
    echo '<br>$c = $a == $b; l\'operatore == confronta l\'uguaglianza delle variabili $a e $b';
    var_dump($c);
    echo '<br>$d = $a == $b; l\'operatore === confronta sia l\'uguaglianza che il tipo delle variabili $a e $b';
    var_dump($d);

    $price = 0;
    echo '<br>$price = 0;';
    if ($price) {
        echo '<br>prezzo aggiornato';
    } else {
        echo '<br>if $price --> prezzo non aggiornato';
    }

    $price1 = 0;
    echo '<br>$price1 = 0;';
    if ($price1 !== null) {
        echo '<br>if $price1 !== null --> prezzo aggiornato';
    } else {
        echo '<br>prezzo non aggiornato';
    }

    $eta = 15;
    echo '<br>$eta = ' . $eta . ' ;';
    if ($eta >= 18) {
        echo '<br>if $eta >=18 --> sei maggiorenne';
    } else {
        echo '<br>sei minorenne';
    }


    /**OPERATORE SPACESHIP <=>*/
    $sp = 'operatore spaceship <=> = fa tre confronti: <=  >=  =';
    echo "<br>$sp";

    $g = 2;
    $h = 1;
    $i = $g <=> $h;
    echo '<br>';
    var_dump($g, $h, $i);
    if ($i === 0) {
        echo "<br>$g e $h sono uguali";
    } elseif ($i === -1) {
        echo "<br>$g è minore di $h";
    } else {
        echo "<br>$g è maggiore di $h";
    }

    /**NULL coalescing ??*/
    $nc = 'operatore NULL coalescing ?? torna il primo valore che non si NULL di una lista di valori';
    echo "<br>$nc";


    $result = null ?? 2 ?? 3;
    echo '<br>il risultato di NULL coalescing $result = null ?? 2 ?? 3 è = ';
    var_dump($result);


    /**operatore TERNARIO*/
    $ot = 'operatore TERNARIO = (condizione) ? valore1 : valore2 ';
    echo "<br>$ot" . "<br>se la condizione è vera farà qualcosa, altrimenti farà un'altra cosa";

    $val1 = 1;
    $val2 = 2;
    echo '<br>$val1 = ' . $val1 . '; e ' . '$val2 = ' . $val2 . '; condizione operatore ternario = ($val1==$val2)';
    $ternary = ($val1 == $val2) ? "<br>operatore ternario = sono uguali" : "<br>operatore ternario = sono diversi";
    echo $ternary;
}

