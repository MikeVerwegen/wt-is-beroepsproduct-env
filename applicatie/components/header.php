<?php

function maakHeader() {
  $html = <<<HEAD
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
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
          </div>
        </div>
        <a href="">Zoeken</a>
  <!--
        <form action="" method="post">
          <input type="text" placeholder="Zoeken">
        </form>
  -->
        <a href="login.php">Inloggen</a>
      </div>
    </a>
  </div>
HEAD;
  return $html;
}

define('HTML_HEADER', maakHeader());

?>
