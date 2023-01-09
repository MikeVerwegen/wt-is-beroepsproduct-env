<?php
  declare(strict_types=1);

  session_start();
if (!isset($_SESSION['user'])) {
  session_destroy();
} else {
  $_SESSION['paginasBezocht']++;
}
  
  require_once 'components/head.php';
  require_once 'components/header.php';
  require_once 'components/footer.php';
  require_once 'components/data_functies.php';
  require_once 'components/view_functies.php';

  $movie_id = $_GET['movie_id'];
  $film = haalFilmgegevensOp($movie_id);
  $genres = haalFilmGenresOp($movie_id);
  $regisseurs = haalRegisseursOp($movie_id);
  $cast = haalCastOp($movie_id);

  echo genereerHead($film['title']);
?>
  <body>
    <div class="grid">
      <header>
        <?=
        HTML_HEADER;
        ?>
      </header>
      <main>
        <div id='mediaproduct'>
          <?php
            $html = filmgegevensNaarHTML($film, $genres);
            $html .= castNaarHTML($regisseurs, $cast);
            echo $html;
            ?>
          </p>
        </div>
      </main>
      <footer>
        <?=
        HTML_FOOTER;
        ?>
      </footer>
    </div>
  </body>
</html>
