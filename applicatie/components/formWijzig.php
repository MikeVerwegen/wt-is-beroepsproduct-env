<?php
function genereerWijzigFormulier($movie_id) {
  $film = haalFilmgegevensOp($movie_id);
  $html = '
    <form action="verwerkWijziging.php?id=' . $movie_id . '" method="post"> 
    <fieldset>
      <label for="titel">Titel: *</label>
      <input id="titel" type="text" name="titel" value="' . $film['title'] . '" maxlength="255" required/>
      <br>
      <label for="duur">Duur (in minuten):</label>
      <input id="duur" type="number" name="duur" value="' . $film['duration'] . '"/>
      <br>
      <label for="descr">Beschrijving:</label>
      <input id="descr" type="text" name="descr" value="' . $film['description'] . '" maxlength="255"/>
      <br>
      <label for="jaar">Jaar van uitgave:</label>
      <input id="jaar" type="number" name="jaar" value="' . $film['publication_year'] . '" minlength="4" maxlength="4"/>
      <br>
      <label for="cover">Locatie van previewafbeelding:</label>
      <input id="cover" type="text" name="cover" value="' . $film['cover_image'] . '" maxlength="255"/>
      <br>
      <label for="prev">ID van vorige film in serie:</label>
      <input id="prev" type="number" value="' . $film['previous_part'] . '" name="prev"/>
      <br>
      <label for="price">Prijs: *</label>
      <input id="price" type="text" name="price" value="' . $film['price'] . '" pattern="^[0-9]{n+}\s\.\s[0-9]{2}$" title="Voer hier een geldige prijs in"/>
      <br>
      <label for="url">Link naar trailer:</label>
      <input id="url" type="url" name="url" value="' . $film['URL'] . '" maxlength="255" pattern="https://.+"/>
      <br>
    </fieldset>
    <input type="submit" value="Product wijzigen"/>
  </form>';
  return $html;
}

?>
