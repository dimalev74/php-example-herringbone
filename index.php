<?php
/* Задайте случайным образом массив из N элементов. Выведите его на экран "ёлочкой". */
$N = 10;
$array = [];
$j = 0; 
$k = -1; 

// echo ' Вывод значений елочкой';
// echo '<br />';
// echo '<br />';

// Формируем массив в цикле

for ( $m = 0; $m <$N; $m++ ) {

for ( $i = 1; $i < ($N-$m); $i++ ) {
    echo " ";

  } 
  $k = $k + 2;
  for ( $p = 0; $p <$k; $p++ ) {
  echo "*";
  }

  echo "\n";
  // echo '<br />';
}

  

?>


<!-- 


