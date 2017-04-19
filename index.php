<html>
  <head>
    <meta charset="utf-8" />
  </head>
  <body>

<?php

  $nome = 'Mateus';

  echo 'Hello ' . $nome . '<br />';
  echo "Hello $nome <br />";

  $num1 = 10;
  $num2 = '20pato';

  echo $num1 + $num2 . '<br />';
  echo $num1 - $num2 . '<br />';
  echo $num1 * $num2 . '<br />';
  echo $num1 / $num2 . '<br />';

  $lista = [];
  $lista[] = 'João';
  $lista[] = 'Maria';
  $lista[] = 'Mohammed';

  for($i = 0; $i < count($lista); $i++) 
  {
    echo "O nome é: $lista[$i] <br />";     
  }

  foreach($lista as $item)
  {
    echo "O nome é: $item <br />";
  }

  $teste = true;

  /*

  ==  --> igual
  !=  --> diferente
  ||  --> ou
  &&  --> e
  or  --> ou com baixa procedencia
  and --> e com baix aprecedencia
  === --> igual (verificando tipagem)
  
  */

  if ($teste === 1)
  {
    echo 'É true <br />';
  }
  else
  {
    echo 'É falso <br />';
  }

  echo 'A hora e data atual é: ' . date("d/m/Y H:i:s");
?>

  </body>
</html>
