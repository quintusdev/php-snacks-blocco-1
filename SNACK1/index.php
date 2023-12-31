<?php
/* Array con le partite della giornata */
   $matches = [
    [
        'teams' => 'Milan - Inter',
        'point' => '2-0'
    ],
    [
        'teams' => 'Juventus - Napoli',
        'point' => '1-0'
    ],
    [
        'teams' => 'Verona - Sassuolo',
        'point' => '2-1'
    ],
    [
        'teams' => 'Chievo - Albinoleffe',
        'point' => '0-4'
    ],
    [
        'teams' => 'Udinese - Roma',
        'point' => '0-1'
    ],
    [
        'teams' => 'Spal-Benevento',
        'point' => '0-0'
    ]
   ]
   
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Snack 1 Blocco 1 PHP</title>
    </head>

    <body>
    <div class="container">
        <ul>
            <!-- Ciclo l'array per ricavare i risultati -->
            <?php foreach($matches as $match){ ?>
                <li>
                    <!-- Per ogni partita visualizzo i nomi delle squadre e il punteggio -->
                    <?php echo $match['teams']." | ".$match['point']; ?>
                </li>
            <?php } ?>
        </ul>
    </div>
    </body>

</html>