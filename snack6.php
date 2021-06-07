<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .grey {
      background-color: grey;
    }

    .green {
      background-color: green;
    }
  </style>
</head>

<body>
  <h1>Snack 6</h1>
  <h4>
    Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. <br>

    <?php

    $db = [
      'teachers' => [
        [
          'name' => 'Michele',
          'lastname' => 'Papagni'
        ],
        [
          'name' => 'Fabio',
          'lastname' => 'Forghieri'
        ]
      ],
      'pm' => [
        [
          'name' => 'Roberto',
          'lastname' => 'Marazzini'
        ],
        [
          'name' => 'Federico',
          'lastname' => 'Pellegrini'
        ]
      ]
    ];

    // stampo l'array
    var_dump($db);
    ?>


    <?php
    foreach ($db as $key => $user) {
      echo "<h2>$key</h2>";
      for ($i = 0; $i < count($user); $i++) {
        echo "{$user[$i]['name']} {$user[$i]['lastname']}<br>";
      };
    }
    ?>

    <!-- creo un div con due ul distinti -->
    <div class="grey">
      <ul>
        <?php
        foreach ($db['teachers'] as $value) {
        ?>
          <li>
            <?php
            echo $value['name'] ?> 
            <?php 
            $value['lastname']
            ?>
          </li>
        <?php } ?>
      </ul>
    </div>

    <div class="green">
      <ul>
        <?php
        foreach ($db['pm'] as $value) {
        ?>
          <li>
            <?php
            echo $value['name']
            ?>
            <?php
            $value['lastname']
            ?>
          </li>
        <?php } ?>
      </ul>
    </div>



</body>

</html>