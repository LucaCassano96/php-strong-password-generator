<!-- Todo
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere minuscole e maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php.

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale.

Bonus
Milestone 3
Invece di visualizzare la password nella index.php, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.

Milestone 4
Gestire ulteriori parametri per la password dando all'utente la possibilita' di scegliere quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>


<form>

    <label for="password">password</label>
    <input type="number" name="password" id="password">
    <br>
    <br>


    <label for="numeri">numeri</label>
    <input type="checkbox" name="numeri"> <br>

    <label for="lettere_Maiuscole">lettere Maiuscole</label>
    <input type="checkbox" name="lettere_Maiuscole"> <br>

    <label for="lettere_minuscole">lettere minuscole</label>
    <input type="checkbox" name="lettere_minuscole"> <br>

    <label for="simboli">simboli</label>
    <input type="checkbox" name="simboli"> <br> 

    <input type="submit"> <br> <br>
</form>



<?php
include "./function.php";

$PasswordLenght = $_GET["password"];

$numeri = $_GET["numeri"];
$lettere_Maiuscole = $_GET["lettere_Maiuscole"];
$lettere_minuscole = $_GET["lettere_minuscole"];
$simboli = $_GET["simboli"];


passwordGenerator($PasswordLenght, $numeri, $lettere_Maiuscole, $lettere_minuscole, $simboli);


?>


     
</body>
</html>