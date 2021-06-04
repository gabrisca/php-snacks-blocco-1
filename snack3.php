<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack3</title>
</head>

<body>
  <!-- ## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

  <h1>Snack3</h1>

  <?php

  $posts = [

    '15/04/1452' => [
      [
        'title' => 'Post 1',
        'author' => 'Leonardo da Vinci',
        'text' => "So' Leonardo da Vinci, bischeri"
      ]
    ],

    '06/06/1462' => [
      [
        'title' => 'Post 2',
        'author' => 'Leonardo da Vinci',
        'text' => "Mi garba la pittura, la scultura, l'architettura, le lettere, un po' di tutto suvvia"
      ],
      [
        'title' => 'Post 3',
        'author' => 'Leonardo da Vinci',
        'text' => "Vo' a Firenze a scuola del Verrocchio."
      ]
    ],

    '02/08/1494' => [
      [
        'title' => 'Post 4',
        'author' => 'Leonardo da Vinci',
        'text' => "La pittura è una poesia muta, e la poesia è una pittura cieca"
      ],
      [
        'title' => 'Post 5',
        'author' => 'Leonardo da Vinci',
        'text' => "Gli uomini di genio a volte realizzano di più quando lavorano di meno, perché stanno pensando invenzioni e formando nelle loro menti l'idea perfetta che successivamente esprimono con le loro mani"
      ],
      [
        'title' => 'Post 6',
        'author' => 'Leonardo da Vinci',
        'text' => "Oh Giocondo!"
      ],
    ],
  ];
  var_dump($posts)
  ?>


    <!-- ciclo gli l'array $posts -->
    <?php foreach ($posts as $post => $info) { ?>
      <h3>
      <hr>
        <?php
          echo "$post:"; // stampo ogni $post (la data) di $posts
        ?>
      </h3>

      <!-- su ogni informazione degli array $post faccio un ciclo for per estrarne 'title', 'author' e 'text' -->
      <p>
        <?php
        for ($i = 0; $i < count($info); $i++) {
          echo "<h4>{$info[$i]['title']}:</h4>";
          // echo "{$info[$i]['author']}<br>";
          echo "{$info[$i]['text']}<br>";
        };
        ?>
      </p>
    <?php } ?>



</body>

</html>