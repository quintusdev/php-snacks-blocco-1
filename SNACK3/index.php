<?php
$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

/* Creo un ciclo ForEach per ciclare l'array $posts */
foreach($posts as $date => $postList) {
    /* Stampo la data concatenando la prima chiave*/
    echo "Data: " .$date . "<br>";
    /* Stampo l'intestazione */
    echo "Post:<br>";
    /* Creo un altro ForEach per inserire ogni post all'interno della data corrispondente*/
    foreach($postList as $post){
        echo "<br>";
        echo "<hr>";
        /* Stampo il titolo di ogni post, prendendo il valore dall'array rinominato $POST e richiamando la chiave fra parentesi quadre*/
        echo "- Titolo: ".$post['title']. "<hr>";
        /* Stampo l'autore di ogni post, prendendo il valore dall'array rinominato $POST e richiamando la chiave fra parentesi quadre*/
        echo "- Autore: ".$post['author']. "<hr>";
        /* Stampo il testo di ogni post, prendendo il valore dall'array rinominato $POST e richiamando la chiave fra parentesi quadre*/
        echo "- Testo: ".$post['text']. "<hr>";
        echo "<br>";
    }
    echo "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Snack 2 Blocco 1 PHP</title>
    </head>

    <body>
        <div class="container">
        
        </div>
    </body>
</html>
