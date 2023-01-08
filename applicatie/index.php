<?php
  declare(strict_types=1);
  
  $titel = "Home - Fletnix";
  
  require_once 'components/head.php';
  require_once 'components/header.php';
  require_once 'components/footer.php';
  require_once 'components/data_functies.php';
  require_once 'components/view_functies.php';
  
  if (isset($_GET['genre'])) {
    $genre = $_GET['genre'];
  }
  if (isset($_GET['titel'])) {
    $search = '%';
    $search .= $_GET['titel'];
    $search .= '%';
  }

  if (!empty($genre) && !empty($search)) {
    $films = zoekFilmsOpTitelEnGenre($search, $genre);
  } else if (!empty($search)) {
    $films = zoekFilmsOpTitel($search);
  } else if (!empty($genre)) {
    $films = zoekFilmsOpGenre($genre);
  } else {
    $films = haalAlleFilmsOp();
  }

//  var_dump($films);die();

  echo genereerHead($titel);
?>
  <link rel="stylesheet" href="css/preview.css">
  <body>
    <div class="grid">
      <header>
        <?=
        HTML_HEADER;
        ?>
      </header>
      <main>
        <div class="preview-grid" id="preview">
          <?=
            $html = filmsNaarHTML($films);
            echo $html;
          ?>
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
