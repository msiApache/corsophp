<?php
/**TUTTO CIO' CHE E' NELLO SHOW CON VALORE IMPOSTATO A FALSE NON E' VISIBILE*/
$show = false;

if ($show) {

    $_ = 'test';
    echo $_;
    /** VALORE FALSE : FALSE - 0 - [] - null */
    $isLoaded = false;
    if ($isLoaded) {
        echo 'arma carica';
    } else {
        echo 'arma non carica';
    }

    $isLoaded2 = 1;
    if ($isLoaded2) {
        echo '<br/>arma carica';
    } else {
        echo '<br/>arma non carica';
    }

    /**LE VARIABILI VENGONO RICONOSCIUTE SONO TRA APICI DOPPI LA STESSA COSA VALORE PER NEW LINE \n */
    $name = 'Gianluca';
    $lastName = "$name Tuono";
    $lastName2 = '<br/>$name Tuono';
    $lastName3 = "$name Tuono";
    $objClass = new stdClass();

    $doc = <<<VIRGOLETTE
$lastName2
VIRGOLETTE;

    $doc2 = <<<VIRGOLETTE
$lastName3
VIRGOLETTE;

    $doc2 = <<<VIRGOLETTE
$lastName3
VIRGOLETTE;

    $doc3 = <<<'VIRGOLETTE'
$lastName3
VIRGOLETTE;

    $objClass->custom = '<br/>customVaraiabes';

    $address = "Corso Racconigi";
    $accounts['accountNumber'] = 5436373693;

    echo "$lastName $doc $objClass->custom";
    echo "<br/>$address{$accounts['accountNumber']}";
    echo "<br/>$doc2 <br/>$doc3";


    /**IN PHP ANCHE LE STRINGHE VENGONO TRATTATE COME ARRAY OGNI CARATTERE CORRISPONDE AD UN INDICE LE LETTERE ACCENTATE
     * OCCUPANO DUE CELLE DI MEMORIA*/
    $name = 'Hydran';
    $accentend = 'à';

    echo $name[0], $name[1], $name[2], $name[3], $accentend, $name[5];

    define('giallo', 4);
    /*$arr = array();
    $arr = array('RED', 'GREEN', 'BLUE');*/
    $arr = [];
    $arr = ['RED', 'GREEN', 'BLUE'];
    $arr[9] = 'PINK';
    $arr[] = 'MAGENTA';
    $arr['giallo'] = 'Amarillo';
    $arr[] = 'purple';
    $arr[4] = [1, 2, 3, 4];
    $arr['giorni'] = ['LUNEDI', 'MARTEDI', 'MERCOLDI', 'GIOVEDI', 'VENERDI', 'SABATO', 'DOMENICA'];
    $arr['mesi'] = ['G', 'F'];
    /**ELIMINA IL CONTENUTO DELL'ARRAY KEY VALUE*/
    unset($arr['mesi']);
//echo $arr[giallo];
//var_dump($arr['giorni'][0]);
    var_dump($arr);
    var_dump($arr['mesi']);
    /**LA FUNZIONE array_values resistuisce il valore dell'array copiato ordinando gli indici dell'array*/
    $arr2 = [];
    $arr2 = array_values($arr);
    var_dump($arr2);
}


