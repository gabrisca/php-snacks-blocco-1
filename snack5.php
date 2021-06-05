<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1>Snack5</h1>
<h3>
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
</h3>
<h5>
explode(delimitatore, stringa) - crea un array dividendo una stringa ad ogni occorrenza del delimitatore
</h5>
  <p>
  <!-- salvo in una variabile un paragrafo abbastanza lungo -->
  <?php 
  $paragrafo = '“Dovrai andartene silenzionsamente, e dovrai andartene presto”, disse Gandalf. Erano passate due o tre settimane e Frodo non accennava ad incominciare i preparativi di partenza. “Lo so, ma è un pò difficile fare tutt’e due le cose”, obiettò. “Se sparisco come Bilbo, lo saprà tutta la Contea in quattro e quattr’otto”. “Certo che non devi sparire!”, disse Gandalf. ” Sarebbe una pessima trovata. Ho detto presto e non immediatamente. Se trovi un modo per svignartela di qui senza che tutti lo sappiano, vale la pena perdere un pò di tempo. Ma non devi aspettare troppo a lungo”. “Che te ne pare dell’autunno, all’incirca nel periodo del nostro compleanno?”, chiese Frodo. “Dovrei farcela ad organizzare tutto per allora”. A dire il vero, Frodo era estremamente riluttante a partire, ora che era giunto il momento. Casa Baggins pareva più incantevole e comoda che mai, e voleva godersi il più possibile la sua ultima estate nella Contea, assaporandone tutte le delizie. Una volta giunto l’autunno, sapeva che almeno una parte della sua anima sarebbe stata ben disposta al viaggio, come sempre in quella stagione. Segretamente aveva già deciso di partire il giorno del suo cinquantesimo compleanno, il centoventottesimodi Bilbo. Sembrava i nqualche modo il giorno adatto per partire sulle sue tracce. Seguire Bilbo era la cosa che occupava maggiormente i suoi pensieri, e l’unica cosa che rendesse sopportabile l’idea della partenza. Pensava il meno possibile all’Anello, e in quali avventure esso l’avrebbe potuto condurre. Ma non comunicò a Gandalf tutti i suoi pensieri. Era da sempre difficile capire ciò che lo stregone indovinava. Gandalf guardò Frodo sorridend. “Benissimo”, disse, “credo che possa andare: ma non rinviare di un solo giorno. Sto diventando molto ansioso ed inquieto. Nel frattempo, sii cauto, e non lasciarti… ';
  echo $paragrafo; // stampo il pargrafo

  $arrayExploded = explode('.', $paragrafo); // genero un array di stringhe ricavato con il metodo explode che crea una stringa ogni volta che incontra un delimitatore (in questo caso un punto '.')

  var_dump($arrayExploded); // visualizzo l'array di stringhe
  
  // con un ciclo for sull'array estraggo e stampo il contenuto di ogni indice dello stesso array
  for ($i = 0; $i < count($arrayExploded); $i++) {
    echo "$arrayExploded[$i].<br>";
  }
  ?>
  </p>
</body>
</html>