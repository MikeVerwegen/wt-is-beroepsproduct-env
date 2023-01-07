<?php
function genereerRegistratieFormulier() {
  $html = <<<HEAD
  <form action="login" method="post">
    <fieldset>
      <label for="vnaam">Voornaam: *</label>
      <input id="vnaam" type="text" name="vnaam" required autofocus/><br/>
      <label for="tussen">Tussenvoegsel:</label>
      <input id="tussen" type="text" name="tussen"/><br/>
      <label for="anaam">Achternaam: *</label>
      <input id="anaam" type="text" name="anaam" required/><br/>
      <label for="mail">E-mailadres: *</label>
      <input id="mail" type="email" name="mail" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._%+-]+\.[a-zA-Z]{2,4}$" required/><br/>
      <label for="land">Nationaliteit: *</label>
      <input id="land" type="text" name="land" required/><br/>
      <label for="datum">Geboortedatum: *</label>
      <input id="datum" type="date" name="datum" required/><br/>
      <label for="mw">Abonnementkeuze: *</label> <!-- required -->
      <fieldset>
        <label for="opt1"><input id="opt1" type="radio" name="mw" value="8.99" />€8.99 (Standaard)</label>
        <label for="opt2"><input id="opt2" type="radio" name="mw" value="10.99" />€10.99 (Standaard + Full HD)</label>
        <label for="opt3"><input id="opt3" type="radio" name="mw" value="12.99" />€12.99 (Standaard + 4K/UHD)</label>
      </fieldset>
      <label for="iban">IBAN-nummer: *</label>
      <input id="iban" type="text" name="iban" minlength="14" maxlength="14" pattern="[AZ]{2}[0-9]{2}[AZ]{4}[0-9]{10}" title="Een IBAN bestaat uit 2 letters, 2 cijfers, 4 letters en 10 cijfers." required/><br/>
      <label for="ww">Wachtwoord: *</label>
      <input id="ww" type="password" name="ww" required/><br />
      <label for="hww">Bevestiging wachtwoord: *</label>
      <input id="hww" type="password" name="hww" required/> <!-- moet gelijk zijn aan wachtwoord -->
    </fieldset>
    <input type="submit" value="Registreren"/>
  </form>
HEAD;
  return $html;
}
?>
