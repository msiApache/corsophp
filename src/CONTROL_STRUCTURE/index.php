<?php

$show = false;

if ($show) {

    /**STRUTTURE DI CONTROLLO:  if - else - elseif*/
    echo 'STRUTTURE DI CONTROLLO:  if - else - elseif';
    $money = 5;
    echo '<br><br>money = ' . $money . '€';
    echo " <br>if ($money <= 2) {
    <br>echo ' puoi andare a prendere un caffè';
<br>} elseif ($money > 2 && $money <= 5) {
    <br>echo ' puoi andare a comprare un pezzo di pizza';
<br>} elseif ($money > 5 && $money <= 10) {
    <br>echo ' puoi andare a comprare una pizza intera'; 
<br>} elseif ($money > 10 && $money <= 20) {
    <br>echo ' puoi andare al ristorante a mangiare antipasto e primo'; 
<br>} elseif ($money > 20 && $money <= 30) {
    <br>echo ' puoi andare al ristorante a mangiare antipasto, primo e secondo'; 
<br>} else {
    <br>echo ' puoi mangiare qualsiasi cosa tu voglia al ristorante';
<br>}";
    echo '<br>risultato = ' . $money . '€';

    if ($money <= 2) {
        echo ' puoi andare a prendere un caffè';
    } elseif ($money > 2 && $money <= 5) {
        echo ' puoi andare a comprare un pezzo di pizza';
    } elseif ($money > 5 && $money <= 10) {
        echo ' puoi andare a comprare una pizza intera';
    } elseif ($money > 10 && $money <= 20) {
        echo ' puoi andare al ristorante a mangiare antipasto e primo';
    } elseif ($money > 20 && $money <= 30) {
        echo ' puoi andare al ristorante a mangiare antipasto, primo e secondo';
    } else {
        echo ' puoi mangiare qualsiasi cosa tu voglia al ristorante';
    }

    $money2 = 10;
    echo '<br><br></br>money2 = ' . $money2 . '€';
    echo '<br>utilizza if else e elseif con l\'html:';
    echo '<br> ($money2 <= 10) : puoi comprare una pizza ? puoi andare al ristorante';
    if ($money2 <= 10): ?>
        <h2> puoi comprare una pizza</h2>
    <?php else: ?>
        <h2>puoi andare al ristorante</h2>
    <?php endif; ?>
    <?php

    /**STRUTTURE DI CONTROLLO:  switch*/
    $day = 'lunedi';
    switch ($day) {
        case 'lunedi':
            echo '<h2>LUNEDI</h2>';
            break;
        case 'martedi':
            echo '<h2>MARTEDI</h2>';
            break;
        case 'mercoledi':
            echo '<h2>MERCOLEDI</h2>';
            break;
        case 'giovedi':
            echo '<h2>GIOVEDI</h2>';
            break;
        case 'venerdi':
            echo '<h2>VENERDI</h2>';
            break;
        case 'sabato':
            echo '<h2>SABATO</h2>';
            break;
        case 'domenica':
            echo '<h2>DOMENICA</h2>';
            break;
        default:
            echo '<h2>GIORNI DELLA SETTIMANA</h2>';
    }

    /**STRUTTURE DI CONTROLLO:  while do-while*/

}

echo '<br>while: "mentre esegue la condizione se non è vera non la esegue": ';
$i = 1;
while ($i <= 10) {
    echo '<br>' . $i;
    $i++;
}

echo '<br><br>do-while: "esegue la condizione almeno una volta prima di verificarla": ';
do {
    echo '<br>' . $i;
    $i++;
} while ($i <= 10);

$arr = ['red', 'blue', 'green', 'yellow'];
$total = count($arr);
$i = 0;

echo '<br><br>ciclare un array con il while:';
while ($i < $total) {
    echo '<li>' . $arr[$i] . '</li>';
    $i++;
}

echo '<br><br>ciclare un array con il for: ';
$total = count($arr);
for ($i = 0; $i < $total; $i++) {
    echo '<li>' . $arr[$i] . '</li>';
}

echo '<br><br>ciclo for numeri da 1 a 10: ';
for ($i = 1; $i <= 10; $i++) {
    echo '<li>' . $i . '</li>';
}

echo '<br><br>ciclo for numeri da 1 a 10 con condizione :';
echo '<br>if ($i > 5 ){ ';
echo '<br>break;  ';
echo '<br>}';

for ($i = 1; $i <= 10; $i++) {
    if ($i > 5) {
        break;
    }
    echo '<li>' . $i . '</li>';
}

echo '<br><br>ciclo for numeri da 1 a 5 ripetuto per 3 volte :';
echo '<br>for ($y = 0; $y > 3; $y++) {';
echo '<br>for interno che cilca i numeri da 1 a 5';
echo '<br>}';
for ($y = 0; $y < 3; $y++) {
    for ($i = 1; $i <= 5; $i++) {
        echo '<li>' . $i . '</li>';
    }
}

echo '<br><br>ciclare un array con il foreach: ';
foreach ($arr as $rows) {
    echo '<li>' . $rows . '</li>';
}
?>
<style>
    ul {
        background: #c0c0c0;
        color: #000;
        font-size: 24px;
    }
</style>
