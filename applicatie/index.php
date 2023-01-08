<?php
  declare(strict_types=1);
  
  $titel = "Home - Fletnix";
  
  require_once 'components/head.php';
  require_once 'components/header.php';
  require_once 'components/footer.php';
  require_once 'components/data_functies.php';
  require_once 'components/view_functies.php';
  
  $films = haalAlleFilmsOp();

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
