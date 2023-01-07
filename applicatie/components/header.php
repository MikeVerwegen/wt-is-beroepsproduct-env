<?php
function maakHeader() {
  $html = <<<HEAD
  <div id="header">
    <figure>
      <a href="index.php">
        <img src="images/logo.png" alt=""/>
      </a>
    </figure>
    <a href="login.php">Inloggen</a>
    <form action="" method="post">
      <input type="text" placeholder="Zoeken">
    </form>
    <a href="privacy.php">Privacyverklaring</a>
    <a href="bedrijf.php">Over ons</a>
  </div>
HEAD;
  return $html;
}
?>
