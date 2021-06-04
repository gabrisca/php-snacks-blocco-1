<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che 
l’array non dovrà contenere lo stesso numero più di una volta -->
<h1>Snack4</h1>

<?php 

// creo una funzione che genera un array con tre parametri:
// $min = numero minimo da generare
// $max = numero massimo da generare
// $items = limite massimo degli elementi contenuti nell'array (lunghezza dell'array)
function getNumRandomArray($min, $max, $items ){
  // inizializzo un array vuoto
  $randomArray = [];

  // ciclo while
  // fino a che l'array conterrà meno numeri < di $items...
  while(count($randomArray) < $items){
    // ...genera numero random
    $number = rand($min, $max);

    // se il numero generato $number NON è già presente nell'array...
    if(!in_array($number, $randomArray)){
      // ...lo inserisco nell'array nell'array
      $randomArray[] = $number;
    }
  }

  // restituisco l'array 
  return var_dump($randomArray);
  
};

// inizializzo le variabili che mi servono
$min = 1;
$max = 100;
$items = 15;

// richiamo la funzione
getNumRandomArray($min, $max, $items)

?>
</body>
</html>