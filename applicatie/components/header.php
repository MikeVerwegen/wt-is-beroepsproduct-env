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
HEAD2;
  if (!isset($_SESSION['user'])) {
    $html .= '
        <a href="login.php">Inloggen</a>';
  } else {
      $html .= '
        <a>Hallo ' . $_SESSION['user'] . '</a>
        <a href="verwerkLogout.php">Uitloggen</a>';
  }
  $html .= '
        </div>
    </a>
  </div>';
  return $html;
}

define('HTML_HEADER', maakHeader());

?>
