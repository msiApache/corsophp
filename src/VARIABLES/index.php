<?php
/**TUTTO CIO' CHE E' NELLO SHOW CON VALORE IMPOSTATO A FALSE NON E' VISIBILE*/
$show = true;

if ($show) {

    $_ = 'test';
    echo 'stampa contenuto variabile = ' . $_;
    /** VALORE FALSE : FALSE - 0 - [] - null */
    $isLoaded = false;
    if ($isLoaded) {
        echo '<br>' . 'arma carica';
    } else {
        echo '<br>' . 'la variabile condizionata $isLoaded assume un valore di false = ' . 'arma non carica';
    }

    $isLoaded2 = 1;
    if ($isLoaded2) {
        echo '<br/>' . 'la variabile condizionata $isLoaded2 assume un valore di true = ' . 'arma carica';
    } else {
        echo '<br/>arma non carica';
    }

    /**LE VARIABILI VENGONO RICONOSCIUTE SONO TRA APICI DOPPI LA STESSA COSA VALORE PER NEW LINE \n */
    $name = 'Gianluca';
    $lastName = "$name Tuono";
    $lastName2 = '$name Tuono';
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

    $objClass->custom = 'customVaraiabes';

    $address = "Corso Racconigi ";
    $accounts['accountNumber'] = 5436373693;

    echo '<br/>stampa la variabile $lastName, composta dalla stringa $nameTuono = ' . $lastName;
    echo '<br/>stampa la variabile $doc che non assume il valore Gianluca perchè tra apici singoli e non doppi = ' . $doc;
    echo '<br/>stampa l\'oggetto di classe della variabile $objClass->custom = ' . $objClass->custom;
    echo "<br/>stampa il contenuto di una variabile e un array " . '$address{$accounts[\'accountNumber\']} = ' . "$address{$accounts['accountNumber']}";

    /**IN PHP ANCHE LE STRINGHE VENGONO TRATTATE COME ARRAY OGNI CARATTERE CORRISPONDE AD UN INDICE LE LETTERE ACCENTATE
     * OCCUPANO DUE CELLE DI MEMORIA*/
    $name = 'Hydran';
    $accentend = 'à';

    echo '<br/>php tratta le stringhe come fossero array la variabile $name contiene il nome Hydran, sostituendo la a\' alla a indice[4] = ' . $name[0], $name[1], $name[2], $name[3], $accentend, $name[5];

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
    /** unset() ELIMINA IL CONTENUTO DELL'ARRAY KEY VALUE*/
    //unset($arr['mesi']);
    echo '<br>stampa array $arr = '; var_dump($arr);
    echo '<br>stampa array associativo $arr[\'mesi\'] = '; var_dump($arr['mesi']);
    /**LA FUNZIONE array_values resistuisce il valore dell'array copiato ordinando gli indici dell'array*/
    $arr2 = [];
    $arr2 = array_values($arr);
    echo '<br>stampa array $arr2 assegnatoli il valore dell\'array $arr mediante la funzione  $arr2 = array_values($arr); = '; var_dump($arr);
}


