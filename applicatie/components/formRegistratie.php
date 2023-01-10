<?php

require_once 'components/data_functies.php';
require_once 'components/view_functies.php';

function genereerRegistratieFormulier() {
  $html = <<<REGISTRATIE1
    <form action="verwerkRegistratie.php" method="post"> 
    <fieldset>
      <label for="vnaam">Voornaam: *</label>
      <input id="vnaam" type="text" name="vnaam" placeholder="Voornaam" autocomplete="off" required autofocus/>
      <br>
      <label for="tussen">Tussenvoegsel:</label>
      <input id="tussen" type="text" name="tussen" placeholder="Tussenvoegsel" autocomplete="off"/>
      <br>
      <label for="anaam">Achternaam: *</label>
      <input id="anaam" type="text" name="anaam" placeholder="Achternaam" autocomplete="off" required/>
      <br><br>
      <label for="gesl"></label>
      <fieldset id="gesl">
        <legend>Geslacht *</legend>
        <label for="gesl1"><input id="gesl" type="radio" name="gesl" value="M" required>Man</label>
        <label for="gesl2"><input id="gesl" type="radio" name="gesl" value="V">Vrouw</label>
        <label for="gesl3"><input id="gesl" type="radio" name="gesl" value="NULL">Anders</label>
      </fieldset>
      <br>
      <label for="mail">E-mailadres: *</label>
      <input id="mail" type="email" name="mail" placeholder="E-mailadres" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._%+-]+\.[a-zA-Z]{2,4}$" autocomplete="off" required/>
      <br>
REGISTRATIE1;
  $landen = haalAlleLandenOp();
  $html .= landenNaarHTML($landen);
  $html .= '
      <label for="datum">Geboortedatum: *</label>
      <input id="datum" type="date" name="datum" autocomplete="off" required/>
      <br>';
  $contracten = haalAlleContractenOp();
  $html .= contractenNaarHTML($contracten);
  $betaalmethoden = haalAlleBetaalmethodenOp();
  $html .= betaalmethodenNaarHTML($betaalmethoden);
  $html .= <<<REGISTRATIE2
      <label for="iban">IBAN-nummer: *</label>
      <input id="iban" type="text" name="iban" placeholder="IBAN" minlength="18" maxlength="18" pattern="^[AZ]{2}\s[0-9]{2}\s[AZ]{4}\s[0-9]{10}$" title="Een IBAN bestaat uit 2 letters, 2 cijfers, 4 letters en 10 cijfers." autocomplete="off" required/><br/>
      <br>
      <label for="user">Gebruikersnaam: *</label>
      <input id="user" type="text" name="user" placeholder="Gebruikersnaam" autocomplete="off" required/>
      <br>
      <label for="ww">Wachtwoord: *</label>
      <input id="ww" type="password" name="ww" placeholder="Wachtwoord" autocomplete="off" required/>
      <br>
      <label for="hww">Bevestiging wachtwoord: *</label>
      <input id="hww" type="password" name="hww" placeholder="Herhaal wachtwoord" autocomplete="off" required/>
    </fieldset>
    <input type="submit" value="Registreren"/>
  </form>
REGISTRATIE2;
  return $html;
}

define('HTML_FORM_REG', genereerRegistratieFormulier());

?>
