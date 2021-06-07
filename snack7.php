<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Snack7</h1>
  <h5>
    Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. <br>
    Stampare Nome, Cognome e la media dei voti di ogni alunno.
  </h5>

  <?php
  $students = [
    [
      'name' => 'Roberto',
      'lastname' => 'Marazzini',
      'votes' => [6, 6, 7, 8, 4, 7]
    ],
    [
      'name' => 'Flavia',
      'lastname' => 'Iola',
      'votes' => [8, 8, 7, 8, 8, 7]
    ],
    [
      'name' => 'Camilla',
      'lastname' => 'Barbagianni',
      'votes' => [9, 9, 9, 9, 9, 9]
    ],
    [
      'name' => 'Cosimo',
      'lastname' => 'De Cosimi',
      'votes' => [5, 6, 6, 5, 5, 6]
    ],
    [
      'name' => 'Leonida',
      'lastname' => 'Dei Poveri',
      'votes' => [7, 6, 7, 5, 7, 7]
    ],
  ];

  var_dump($students)
  ?>

  <ul>
    <?php
    foreach ($students as $key => $student) { ?>
      <li>
        <?php echo $student['name'] // stampo il nome di ogni studente?>
        <?php echo $student['lastname'] // stampo il cognome di ogni studente?>
         - Media voti:
        <?php
        // number_format formatta i numeri
        echo number_format(array_sum($student['votes']) / count($student['votes']), 2)
        ?>
      </li>
    <?php } ?>
  </ul>

</body>

</html>