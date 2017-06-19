<?php

$numero=78;
$divisor=2;
$omirp=true;


while ($divisor < $numero && $omirp) {  //mientras el divisor sea menor que el numero y omirp
  if ($numero % $divisor == 0) { //si el numero entre el divisor es = a 0
    $omirp=false;

  }

  $divisor++;

}

if ($omirp) { // si el numero es omirp
  echo "El numero es Omirp";
}else { //si no es omirp
    echo "El numero no es Omirp";
  }

 ?>
