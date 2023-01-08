<?php

require_once 'components/data_functies.php';
require_once 'components/view_functies.php';

function maakHeader() {
  $html = <<<HEAD1
  <div class="header">
    <a>
      <figure>
        <a href="index.php">
          <img src="images/logo.png" alt=""/>
        </a>
      </figure>
      <div class="header-text">
        <div class="dropdown">
          <button class="dropbtn">Genres</button>
          <div class="dropdown-content">
HEAD1;
  $genres = haalAlleGenresOp();
  $html .= genresNaarHTML($genres);
  $html .= <<<HEAD2
          </div>
        </div>
      </div>
      <a>
        <form action="index.php" method="get">
          <input type="text" name="titel" id="titel" placeholder="Zoeken">
        </form>
      </a>
      <div class="header-text">
        <a href="login.php">Inloggen</a>
      </div>
    </a>
  </div>
HEAD2;
  return $html;
}

define('HTML_HEADER', maakHeader());

?>
