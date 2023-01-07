<?php
function printCast($regisseur, $hoofdrolspelers) {
  $aantalActeurs = count($hoofdrolspelers);
  $aantal = 0;
  print "Regisseur:\r\n";
  print $regisseur."<br>";
  print "Cast:\r\n";
  foreach ($hoofdrolspelers as $acteur) {
    if ($aantal < ($aantalActeurs - 1)) {
      print $acteur.", ";
      $aantal = $aantal + 1;
    }
    else {
      print $acteur;
    }
  }
}
?>
