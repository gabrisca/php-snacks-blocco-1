<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <!-- 
  Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
  Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
  Stampiamo a schermo tutte le partite con questo schema.
  Olimpia Milano - Cantù | 55-60
 -->

  <?php 
  
  $games = [
    [
      'team1' => 'Olimpia Milano',
      'team2' => 'Cantù',
      'punti_team1' => 55,
      'punti_team2' => 60,
    ],
    [
      'team1' => 'Virtus Bologna',
      'team2' => 'Reyer Venezia Mestre',
      'punti_team1' => 74,
      'punti_team2' => 71,
    ],
  ];

  var_dump($games);
  
  ?>

<ul>
<?php foreach($games as $game){ ?>
  <li>
  <?php echo $game['team1'] ?> 
  -
  <?php echo $game['team2'] ?> 
  || 
  <?php echo $game['punti_team1'] ?>
  <?php echo $game['punti_team2'] ?>
  </li>
  <?php } ?>
</ul>


</body>
</html>