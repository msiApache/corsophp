<?php


class Functions
{
    public function operatoreTernario()
    {
        $fiori = 'tulipano';
        $alberi = 'tulipano';
        $condizione = ($fiori == $alberi ? 'UGUALI' : 'DIVERSI');
        //ECHO PAGINA :
        $h5 = "<h5 style='color: darkblue'>";
        echo "<h2>OPERATORE TERNARIO :</h2>"
            . "$h5 VARIABILI :</h5>"
            . '$fiori = ' . "'tulipano'<br>"
            . '$alberi = ' . "'tulipano'<br>"
            . "$h5 CONDIZIONE :</h5>"
            . '($fiori == $alberi ? ' . "'UGUALI' : 'DIVERSI')"
            . "$h5 RISULTATO :</h5>"
            . $condizione;
    }

    public function cicloWhile()
    {
        $spesa = 2;
        $budget = 20;
        $view = false;
        if ($view) {
            while ($spesa <= $budget) {
                echo "ho speso $spesa €, posso spendere ancora" . ($budget - $spesa) . "€" . "<br>";
                $spesa++;
            }
        }

        //ECHO PAGINA :
        $h5 = "<h5 style='color: darkblue'>";
        $br = '< ' . 'br' . ' >';
        if ($h5) {
            echo "<h2>CICLO WHILE :</h2>"
                . "$h5 VARIABILI :</h5>"
                . '$spesa = ' . "2<br>"
                . '$budget = ' . "20<br>"
                . "$h5 CICLO WHILE :</h5>"
                . 'while ($spesa <= $budget) {<br>'
                . 'echo "ho speso $spesa €, posso spendere ancora" . ($budget - $spesa) . "€" . ' . "$br" . ' ;<br>'
                . '$spesa++;<br>'
                . '}<br>'
                . "$h5 RISULTATO :</h5><br>";
            while ($spesa <= $budget) {
                echo "ho speso $spesa €, posso spendere ancora " . ($budget - $spesa) . "€" . "<br>";
                $spesa++;
            }
        }
    }

    public function switchCase($type)
    {
        $h6 = "color: red";
        $h5 = "color: blue";
        $h4 = "color: orange";
        $h3 = "color: grey";
        $h2 = "color: green";
        $h1 = "color: purple";
        switch ($type) {
            case  '<h6>':
                return "<h6 style='$h6'>";
            case  '<h5>':
                return "<h5 style='$h5'>";
            case '<h4>':
                return "<h4 style='$h4'>";
            case '<h3>':
                return "<h3 style='$h3'>";
            case '<h2>':
                return "<h2 style='$h2'>";
            case '<h1>':
                return "<h1 style='$h1'>";
            default:
                return 'nessuno stile trovato';
        }
    }

    //ECHO PAGINA :
    public function viewSwitchCase()
    {
        $h5 = "<h5 style='color: darkblue'>";
        if ($h5) {
            echo "<h2>SWITCH CASE :</h2>"
                . "$h5 VARIABILI :</h5>"
                . '$h6 = ' . "'color: red'<br>"
                . '$h5 = ' . "'color: blue'<br>"
                . '$h4 = ' . "'color: orange'<br>"
                . '$h3 = ' . "'color: grey'<br>"
                . '$h2 = ' . "'color: green'<br>"
                . '$h1 = ' . "'color: purple'<br>"
                . "$h5 SWITCH CASE :</h5>"
                . 'switch ($type) {<br>'
                . " case  < h6 > :<br>"
                . ' return "< h6 style=$h6>";<br>'
                . " case  < h5 > :<br>"
                . ' return "< h5 style=$h5>";<br>'
                . " case  < h4 > :<br>"
                . ' return "< h4 style=$h4>";<br>'
                . " case  < h3 > :<br>"
                . ' return "< h3 style=$h3>";<br>'
                . " case  < h2 > :<br>"
                . ' return "< h2 style=$h2>";<br>'
                . " case  < h1 > :<br>"
                . ' return "< h1 style=$h1>";<br>'
                . " default :<br>"
                . " return 'nessuno stile trovato';<br>"
                . " }<br>"
                . "$h5 ECHO  RISULTATO :</h5><br>"
                . 'echo $this->switchCase(' . "'< h6 >')" . '."text< /h6 >"<br>'
                . 'echo $this->switchCase(' . "'< h5 >')" . '."text< /h5 >"<br>'
                . 'echo $this->switchCase(' . "'< h4 >')" . '."text< /h4 >"<br>'
                . 'echo $this->switchCase(' . "'< h3 >')" . '."text< /h3 >"<br>'
                . 'echo $this->switchCase(' . "'< h2 >')" . '."text< /h2 >"<br>'
                . 'echo $this->switchCase(' . "'< h1 >')" . '."text< /h1 >"<br>'
                . "$h5 RISULTATO :</h5><br>"
                . $this->switchCase('<h6>') . "text</h6>"
                . $this->switchCase('<h5>') . "text</h5>"
                . $this->switchCase('<h4>') . "text</h4>"
                . $this->switchCase('<h3>') . "text</h3>"
                . $this->switchCase('<h2>') . "text</h2>"
                . $this->switchCase('<h1>') . "text</h1>";
        }
    }

    public function condizioneIf()
    {
        $anni = 13;
        $view = false;
        if ($view) {
            if ($anni >= 16) {
                echo 'Puoi entrare in discoteca';
            } elseif ($anni >= 13) {
                echo 'Puoi entrare in discoteca accompagnato da un adulto';
            } else {
                echo 'Non è possibile entrare in discoteca';
            }
        }
        //ECHO PAGINA :
        $h5 = "<h5 style='color: darkblue'>";
        if ($h5) {
            echo "<h2>CONDIZIONE IF AND ELSE AND ELSEIF :</h2>"
                . "$h5 VARIABILI :</h5>"
                . '$anni = ' . "13<br>"
                . "$h5 CONDIZIONE IF :</h5>"
                . 'if ($anni >= 16) {<br>'
                . "echo 'Puoi entrare in discoteca';<br>"
                . '} elseif ($anni >= 13) {<br>'
                . "echo 'Puoi entrare in discoteca accompagnato da un adulto';<br>"
                . "} else {<br>"
                . "echo 'Non è possibile entrare in discoteca';<br>"
                . "}<br>"
                . "$h5 RISULTATO :</h5><br>";
            if ($anni >= 16) {
                echo 'Puoi entrare in discoteca';
            } elseif ($anni >= 13) {
                echo 'Puoi entrare in discoteca accompagnato da un adulto';
            } else {
                echo 'Non è possibile entrare in discoteca';
            }
        }
    }

    public function cicloFor()
    {
        $view = false;
        if ($view) {
            for ($i = 0; $i <= 9; $i++) {
                echo $i . "<br>";
            }
        }
        //ECHO PAGINA :
        $h5 = "<h5 style='color: darkblue'>";
        $br = '< ' . 'br' . ' >';
        if ($h5) {
            echo "<h2>CICLO FOR :</h2>"
                . "$h5 CICLO FOR :</h5>"
                . 'for ($i = 0; $i <= 9; $i++) {<br>'
                . 'echo $i . "< br >";<br>'
                . "}<br>"
                . "$h5 RISULTATO :</h5><br>";
            for ($i = 0; $i <= 9; $i++) {
                echo $i . "<br>";
            }
        }
    }

    public function cicloForeach()
    {
        $fiori = ['tulipano', 'gardenia', 'girasole', 'rosa', 'margherita'];
        $view = false;
        if ($view) {
            foreach ($fiori as $fiore) {
                echo $fiore . "<br>";
            }
        }
        //ECHO PAGINA :
        $h5 = "<h5 style='color: darkblue'>";
        if ($h5) {
            echo "<h2>CICLO FOREACH :</h2>"
                . "$h5 VARIABILI :</h5>"
                . '$fiori = [' . "'tulipano','gardenia','girasole','rosa','margherita'];"
                . "$h5 CICLO FOREACH :</h5>"
                . 'foreach ($fiori as $fiore){<br>'
                . 'echo $fiore . "< br >";<br>'
                . "}<br>"
                . "$h5 RISULTATO :</h5><br>";
            foreach ($fiori as $fiore) {
                echo $fiore . "<br>";
            }
        }
    }

    public function cicloForeachAssociativo()
    {
        $libri = ['Titolo' => 'Racconti incantati', 'Autore' => 'David Robertson', 'Data di pubblicazione' => 1998];
        $view = false;
        if ($view) {
            foreach ($libri as $key => $value) {
                echo "$key:$value" . "<br>";
            }
        }
        //ECHO PAGINA :
        $h5 = "<h5 style='color: darkblue'>";
        if ($h5) {
            echo "<h2>CICLO FOREACH ASSOCIATIVO :</h2>"
                . "$h5 VARIABILI :</h5>"
                . '$libri = [' . "'Titolo'=>'Racconti incantati',  'Autore'=>'David Robertson', 'Data di pubblicazione'=>1998];"
                . "$h5 CICLO FOREACH ASSOCIATIVO :</h5>"
                . 'foreach ($libri as $key => $value) {<br>'
                . 'echo "$key:$value" . "< br >";<br>'
                . "}<br>"
                . "$h5 RISULTATO :</h5><br>";
            foreach ($libri as $key => $value) {
                echo "$key:$value" . "<br>";
            }
        }
    }

    public function variabileGlobaleGET()
    {
        //ECHO PAGINA :
        $h5 = "<h5 style='color: darkblue'>";
        if ($h5) {
            echo "<h2>VARIABILE GLOBALE GET :</h2>"
                . "$h5 VARIABILI :</h5>"
                . '$_GET<br>'
                . '$id = 28;<br>'
                . "$h5 VARIABILE GLOBALE GET :</h5>"
                . 'print_r($_GET) = ';
            print_r($_GET);
            echo "<br>";
            echo '$id = 28;';
            echo "<br>";
            echo '< a href="index.php?id=<?=$id; ?>">Clicca qui< /a >';
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Title</title>
            </head>
            <body>
            <br>
            <?php
            $id = 28;
            echo "$h5 RISULTATO :</h5><br>";
            ?>
            <a href="index.php?id=<?= $id; ?>">Clicca qui</a>
            </body>
            </html>
            <?php
            echo "<br>";
            echo 'url pagina dopo la chiamata GET:  da http://localhost/FONDAMENTI/ a http://localhost/FONDAMENTI/index.php?id=28';
        }
    }

    public function variabileGlobalePOST()
    {
        //ECHO PAGINA :
        $h5 = "<h5 style='color: darkblue'>";
        if ($h5) {
            echo "<h2>VARIABILE GLOBALE POST :</h2>"
                . "$h5 VARIABILI :</h5>"
                . 'if (isset($_POST[' . "'nome'])) {<br>"
                . 'echo $_POST[' . "'nome'];<br>"
                . '}<br>'
                . "$h5 VARIABILE GLOBALE POST :</h5>"
                . '$_POST[' . "'nome'];<br>";
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Title</title>
            </head>
            <body>
            <?php
            echo "$h5 RISULTATO :</h5><br>";
            if (isset($_POST['nome'])) {
                echo $_POST['nome'];
            }
            ?>
            <form action="index.php" method="post">
                <input type="text" name="nome" value="">
                <input type="submit" name="submit" value="invia">
            </form>
            </body>
            </html>
            <?php
        }
    }
}

