<?php

require_once 'components/data_functies.php';
require_once 'components/view_functies.php';

function genereerRegistratieFormulier() {
  $html = <<<REGISTRATIE1
  <form action="login.php" method="post">
    <fieldset>
      <label for="vnaam">Voornaam: *</label>
      <input id="vnaam" type="text" name="vnaam" required autofocus/><br/>
      <label for="tussen">Tussenvoegsel:</label>
      <input id="tussen" type="text" name="tussen"/><br/>
      <label for="anaam">Achternaam: *</label>
      <input id="anaam" type="text" name="anaam" required/><br/>
      <label for="mail">E-mailadres: *</label>
      <input id="mail" type="email" name="mail" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._%+-]+\.[a-zA-Z]{2,4}$" required/><br/>
REGISTRATIE1;
  $landen = haalAlleLandenOp();
  $html .= landenNaarHTML($landen);
  $html .= '
      <label for="datum">Geboortedatum: *</label>
      <input id="datum" type="date" name="datum" required/><br/>';
  $contracten = haalAlleContractenOp();
  $html .= contractenNaarHTML($contracten);
  $betaalmethoden = haalAlleBetaalmethodenOp();
  $html .= betaalmethodenNaarHTML($betaalmethoden);
  $html .= <<<REGISTRATIE2
      <label for="iban">IBAN-nummer: *</label>
      <input id="iban" type="text" name="iban" minlength="14" maxlength="14" pattern="[AZ]{2}[0-9]{2}[AZ]{4}[0-9]{10}" title="Een IBAN bestaat uit 2 letters, 2 cijfers, 4 letters en 10 cijfers." required/><br/>
      <br/>
      <label for="user">Gebruikersnaam: *</label>
      <input id="user" type="text" name="user" required/><br/>
      <label for="ww">Wachtwoord: *</label>
      <input id="ww" type="password" name="ww" required/><br/>
      <label for="hww">Bevestiging wachtwoord: *</label>
      <input id="hww" type="password" name="hww" required/> <!-- moet gelijk zijn aan wachtwoord -->
    </fieldset>
    <input type="submit" value="Registreren"/>
  </form>
REGISTRATIE2;
  return $html;
}

define('HTML_FORM_REG', genereerRegistratieFormulier());

?>
