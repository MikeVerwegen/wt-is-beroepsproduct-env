<?php

function maakFooter() {
  $html = <<<FOOT
  <div class="footer">
    <a>
        <a href="bedrijf.php">Over ons</a><br>
        <a href="privacy.php">Privacyverklaring</a><br>
    </a>
  </div>
FOOT;
  return $html;
}

define('HTML_FOOTER', maakFooter());

?>
