<?php
function genereerInlogFormulier() {
  $html = <<<HEAD
  <form action="index" method="post">
    <fieldset>
      <label for="mail">E-mailadres:</label>
      <input id="mail" type="email" name="mail" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._%+-]+\.[a-zA-Z]{2,4}$" required/><br/>
      <label for="ww">Wachtwoord:</label>
      <input id="ww" type="password" name="ww" required /><br/>
    </fieldset>
    <input type="submit" value="Inloggen"/>
  </form>
  <form action="registratie" method="post">
    <input type="submit" value="Registreren"/>
  </form>
HEAD;
  return $html;
}
?>
