<?php

function genereerInlogFormulier() {
  $html = <<<LOGIN
  <form action="verwerkLogin.php" method="post">
    <fieldset>
      <label for="mail">E-mailadres:</label>
      <input id="mail" type="email" name="mail" placeholder="E-mailadres" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._%+-]+\.[a-zA-Z]{2,4}$" required autofocus/>
      <br>
      <label for="ww">Wachtwoord:</label>
      <input id="ww" type="password" name="ww" placeholder="Wachtwoord" required/>
      <br>
    </fieldset>
    <input type="submit" value="Inloggen"/>
  </form>
  <form action="registratie.php" method="post">
    <input type="submit" value="Registreren"/>
  </form>
LOGIN;
  return $html;
}

define('HTML_FORM_LOGIN', genereerInlogFormulier());

?>
