<?php
/* Verifico che tutti i parametri siano stati inseriti dall'utente */
/* la funzione ISSET restituisce TRUE solo se tutte le condizioni sono soddisfatte e diverse da null */
    if (isset($_GET['name']) && isset($_GET['mail'])&& isset($_GET['eta'])){
        /* Salvo i dati inseriti in una variabile */
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $eta = $_GET['eta'];

        /* Verifico tutti i requisiti per effettuare l'accesso */
        /* STRPOS verifica che all'interno della variabile sia incluso il carattere indicato e l'ho impostato diverso da FALSE, così la condizione rimane TRUE */
        /* IS_NUMERIC è una funzione che mi permette di controllare che sia un numero o un numero dentro una stringa*/
        if(strlen($name) > 3 && strpos($mail, '.') !== false && strpos($mail, '@') !== false && is_numeric($eta)){
        /* Se tutti i requisiti sono soddisfatti stampo "ACCESSO RIUSCITO */
            echo "Accesso Riuscito";
        } else{
        /* Se anche UNA SOLA condizione non è soddistatta stampo "ACCESSO NEGATO */ 
            echo "Accesso Negato";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Snack 3 Blocco 1 PHP</title>
    </head>

    <body>
        <div class="container">
        <h4>Verifica Accesso Mail</h4>
        <!-- form da compilare con i dati in input -->
            <form action="" method="GET">
                <!-- Etichetta del campo da compilare -->
                <label for="name">Nome: </label>
                <!-- input con tipologia dello stesso e name per richiamarlo in PHP -->
                <input type="text" id="name" name="name" required>
                <hr>
                <!-- Etichetta del campo da compilare -->
                <label for="mail">E-mail: </label>
                <!-- input con tipologia dello stesso e name per richiamarlo in PHP -->
                <input type="email" id="mail" name="mail" required>
                <hr>
                <!-- Etichetta del campo da compilare -->
                <label for="age">Età: </label>
                <!-- input con tipologia dello stesso e name per richiamarlo in PHP -->
                <input type="text" id="age" name="eta" required>
                <hr>
                <!-- Pulsante di Invio dei dati del form -->
                <input type="submit" value="Verifica Dati">
            </form>
        </div>
    </body>
</html>