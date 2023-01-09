<?php

function genereerProductFormulier() {
  $html = '
    <form action="verwerkProduct.php" method="post"> 
    <fieldset>
      <label for="titel">Titel: *</label>
      <input id="titel" type="text" name="titel" maxlength="255" required/>
      <br>
      <label for="duur">Duur (in minuten):</label>
      <input id="duur" type="number" name="duur"/>
      <br>
      <label for="descr">Beschrijving:</label>
      <input id="descr" type="text" name="descr" maxlength="255"/>
      <br>
      <label for="jaar">Jaar van uitgave:</label>
      <input id="jaar" type="number" name="jaar" minlength="4" maxlength="4"/>
      <br>
      <label for="cover">Locatie van previewafbeelding:</label>
      <input id="cover" type="text" name="cover" maxlength="255"/>
      <br>
      <label for="prev">ID van vorige film in serie:</label>
      <input id="prev" type="number" name="prev"/>
      <br>
      <label for="price">Prijs: *</label>
      <input id="price" type="text" name="price" pattern="^[0-9]{n+}\s\.\s[0-9]{2}$" title="Voer hier een geldige prijs in"/>
      <br>
      <label for="url">Link naar trailer:</label>
      <input id="url" type="url" name="url" maxlength="255" pattern="https://.+"/>
      <br>
    </fieldset>
    <input type="submit" value="Product toevoegen"/>
  </form>';
  return $html;
}

define('HTML_FORM_PROD', genereerProductFormulier());

?>
