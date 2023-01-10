<?php

require_once 'components/data_functies.php';
require_once 'components/view_functies.php';

function maakHeader() {
  $html = <<<HEAD1
  <div class="header">
    <a>
      <figure>
        <a href="/">
          <img src="images/logo.png" alt=""/>
        </a>
      </figure>
      <div class="header-text-left">
        <div class="dropdown">
          <button class="dropbtn">Genres</button>
          <div class="dropdown-content">
HEAD1;
  $genres = haalAlleGenresOp();
  $html .= genresNaarHTMLDrop($genres);
  $html .= <<<HEAD2
          </div>
        </div>
      </div>
      <a>
        <form action="/" method="get">
          <input type="text" name="titel" id="titel" placeholder="Zoeken">
        </form>
      </a>
      <div class="header-text-left">
        <a href="zoeken.php">Geavanceerd zoeken</a>
      </div>
      <div class="header-text-right">
HEAD2;
  if (isset($_SESSION['user'])) {
    $html .= '
      <a>Hallo ' . $_SESSION['user'] . '!</a>';
  }
  if (isset($_SESSION['admin'])) {
    $html .= '
      <a href="toevoegenProduct.php">Product toevoegen</a>';
  }
  if (isset($_SESSION['user'])) {
    $html .= '
      <a href="verwerkLogout.php">Uitloggen</a>';
  } else {
    $html .= '
      <a href="login.php">Inloggen</a>';
  }
  $html .= '
        </div>
    </a>
  </div>';
  return $html;
}

define('HTML_HEADER', maakHeader());

?>
