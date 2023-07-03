<?php
    /* Creo un array vuoto iniziale */
    $numbers = array();

    /* Creo un ciclo WHILE in modo che cicli l'array fino a un totale di 15 elementi */
    while (count($numbers) < 15) {
        /* Genero un numero casuale tra 1 e 100 compresi */
        $rdm_num =rand(1, 100);
        /* Effettuo un controllo in modo che non ci siano numeri uguali all'interno dell'array */
        /* Se nell'array principale NON è presente il numero random entra nell' IF */
        if (!in_array($rdm_num, $numbers)){
            /* Aggiungo il numero all'array */
            array_push($numbers, $rdm_num);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Snack 4 BONUS Blocco 1 PHP</title>
    </head>

    <body>
        <div class="container">
            <div>
                <h4>Lista di numeri casuali:</h4>
                <ul>
                    <!-- Creo un ciclo FOREACH per visualizzare ogni numero generato all'interno di una lista -->
                    <?php foreach ($numbers as $number): ?>
                        <li><?php echo $number; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </body>
</html>