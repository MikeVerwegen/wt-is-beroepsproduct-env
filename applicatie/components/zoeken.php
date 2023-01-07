<?php
require_once 'verbinding.php';

function zoekOpFilm() {
  $opdracht = $POST['opdracht'];
  $sql = "SELECT title, cover_image FROM Movies WHERE title LIKE '%:opdracht%'";
  $query = $verbinding->prepare($sql);
  $query->execute([':opdracht' => $opdracht]);
}
?>
