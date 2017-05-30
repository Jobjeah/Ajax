<?php
  $gewicht = $_GET["gewicht"];
  $lengte = $_GET["lengte"];
  BMIcalc($gewicht, $lengte);

  function BMIcalc($gewicht,$lengte){
    $lengte = $lengte / 100;
    $bmi = round($gewicht / ($lengte * $lengte));

    echo "Jouw gewicht = ".$gewicht. " kg </br>";
    echo "Jouw lengte = " .$lengte. " m </br>";
    echo "Jouw BMI = " .$bmi. " </br>";

    switch ($bmi) {
      case $bmi < 18.5: echo "Sorry, je hebt ondergewicht"; break;
      case $bmi > 18.5 && $bmi < 25: echo "je hebt een gezond gewicht"; break;
      case $bmi > 25 && $bmi < 27: echo "Sorry, je hebt een lichte vorm van overgewicht"; break;
      case $bmi > 27 && $bmi < 30: echo "Sorry, je hebt een matige vorm van overgewicht"; break;
      case $bmi > 30 && $bmi < 40: echo "Ben je een beetje dik?"; break;
      case $bmi > 40: echo "Je bent wel echt dik hé, ga sporten"; break;

    }
  }
  ?>
